# FOCUS GLUG

## Description
This is the website for Free and Open Source Users SVCE, GNU/Linux User Group.

## Setting up development.
1. PHP has been used to reduce the HTML code duplication. So install PHP using 
package manager.
2. Git is the version control being used. So install git using package manager.
3. Clone the repository into your computer using git clone
```
$ git clone https://github.com/svceglug/focus
```
4. Change into directory containing repo and run PHP development Server.
```
$ php -S 0.0.0.0:8000
```
5. Visit localhost:8000 in your browser. Start hacking.

## Setup Text editor
1. Use 2 spaces for Indentation.
2. Use Spaces, not Tabs
3. Code should be properly indented.
4. Empty new line at the end of the file.

## Code Qualtiy
1. Use Semantic HTML
2. CSS properties must be sorted by type.
```
.selector {
  /* Positioning */
  position: absolute;
  z-index: 10;
  top: 0;
  right: 0;

  /* Display & Box Model */
  display: inline-block;
  overflow: hidden;
  box-sizing: border-box;
  width: 100px;
  height: 100px;
  padding: 10px;
  border: 10px solid #333;
  margin: 10px;

  /* Color */
  background: #000;
  color: #fff

  /* Text */
  font-family: sans-serif;
  font-size: 16px;
  line-height: 1.4;
  text-align: right;

  /* Other */
  cursor: pointer;
}
```
