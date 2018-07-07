<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module
{
        /**
         * Get current url from WebDriver
         * @return mixed
         * @throws \Codeception\Exception\ModuleException
         */
        public function getCurrentUrl()
        {
            return $this->getModule('WebDriver')->_getCurrentUri();
        }
        public function closeSession()
        {
            $this->getModule('WebDriver')->_closeSession();
        }
        public function dragAndDropBy($element)
        {
            $this->getModule('WebDriver')->webDriver->actions()->dragAndDropBy($element, 0, 30)->perform();
        }
}
