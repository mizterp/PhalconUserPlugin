<?php

namespace Phalcon\UserPlugin\Connectors;

use Facebook;

/**
 * Phalcon\UserPlugin\Connectors\FacebookConnector.
 */
class FacebookConnector
{
    private $di;

    private $fbApp;

    private $access_token;

    private $fb_session;

    private $helper;

    private $url;

    public function __construct($di)
    {
        $this->di = $di;
        $fbConfig = $di->get('config')->pup->connectors->facebook;
        $protocol = strtolower(substr($_SERVER['SERVER_PROTOCOL'], 0, strpos($_SERVER['SERVER_PROTOCOL'], '/'))).'://';
        $this->url = $fbConfig->login_url ?: $protocol.$_SERVER['HTTP_HOST'].'/user/loginWithFacebook';

        $this->fbApp = new Facebook\Facebook([
                                                 'app_id' => $fbConfig->appId,
                                                 'app_secret' => $fbConfig->secret,
                                                 'default_graph_version' => 'v2.3',
                                             ]);
    }

    public function getLoginUrl($scope = [])
    {
        $this->helper = $this->fbApp->getRedirectLoginHelper();

        return $this->helper->getLoginUrl($this->url, $scope);
    }

    /**
     * Get facebook user details.
     *
     * @return unknown|bool
     */
    public function getUser()
    {
        $di = $this->di;

        try {
            $this->helper = $this->fbApp->getRedirectLoginHelper();
            $this->access_token = $this->helper->getAccessToken();
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            $di->logger->begin();
            $di->logger->error($e->getMessage());
            $di->logger->commit();
        } catch (\Exception $e) {
            $di->logger->begin();
            $di->logger->error($e->getMessage());
            $di->logger->commit();
        }

        if ($this->access_token) {
            // Send the request to Graph
            try {
                $response = $this->fbApp->get('/me?fields='. ($di->get('config')->pup->connectors->facebook->fields ?: 'id,name,email' ), $this->access_token)->getDecodedBody();
            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                //Graph returned an error
                $di->logger->begin();
                $di->logger->error($e->getMessage());
                $di->logger->commit();
                return false;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                //Validation failed or other local issue
                $di->logger->begin();
                $di->logger->error($e->getMessage());
                $di->logger->commit();
                return false;
            } catch (\Exception $e) {
                $di->logger->begin();
                $di->logger->error($e->getMessage());
                $di->logger->commit();
                return false;
            }
            return $response;
        }

        return false;
    }
}
