How to use?
-----------

* Create message `Message::set($type, $text, array $options = NULL)`
* Render messages in own place `Message::render($view = NULL, $clear = TRUE)`

Example of using:
~~~
// in controller
Message::set(Message::SUCCESS, 'You successful logged in!');
// or
Message::set(Message::SUCCESS, 'You successful logged in!', array('class' => 'closable'));


// in view
Message::render();
// or
Message::render('message/myview', TRUE);
~~~