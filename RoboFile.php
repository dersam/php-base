<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    /**
     * The bot says hello
     */
    public function exampleGreeting()
    {
        $this->say((new \Dersam\ExampleClass())->getGreeting());
    }

    /**
     * The bot says whatever
     * @param $message string The message to say
     */
    public function exampleEcho($message)
    {
        $this->say($message);
    }

    public function exampleHttpGet()
    {
        $this->say(
        (new GuzzleHttp\Client())->request('GET', 'https://example.com')->getBody()
        );
    }
}
