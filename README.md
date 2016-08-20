# Simple Reflected XSS App

This is a very simple PHP application that takes input via URL and reflects that across 3 contexts:

- HTML Context
- HTML Element Context
- Script Context

### HTML Context
This context is when the user input becomes part of the page HTML. Welcome user messages or account informaton displayed on screen are common places that exist in HTML contexts.


### HTML Element Context
This context is when the user input becomes part of the attribute value of an input element. This allows an attacker to use the event handlers of an element to trigger the XSS.

### Script Context
This is a very powerful context as user input becomes part of existing JavaScript and does not require the usage of tags to create the vector.

Please feel free to modify and distribute the app. 

Happy Hacking!



