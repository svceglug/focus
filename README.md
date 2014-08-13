# FOCUS GLUG

## Description
This is the website for Free and Open Source Users SVCE, GNU/Linux User Group.

## Setting up development.
1. Install Git, Apache2, PHP5, MySQL
```shell
sudo add-apt install git-core php5 mysql-server php5-mysql libapache2-mod-php5 apache2-utils php-pear php5-gd  php5-mcrypt php5-curl
```
It may ask you to set a MySQL root password.

2. Fork this repository.

3. Clone the forked repository on your local machine at /var/www/ or /var/www/html depending upon your root location on your machine
```shell
cd /var/www/
git clone git@github.com:svceglug/focus-website.git .
```
will clone this repository on Present Working Directory

4. Start coding and STRICTLY follow the git workflow which is below

5. Send pull request to this repository. We prefer more number of small pull requests rather than a huge one.

6. Congratulate yourself, you are a contributor now

#### Its not necessary that every pull request you send will be accepted but it DEFINITELY is a very good sign, you are a contributer when you send a pull request.

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

## Git Workflow:
1. Create a new branch for every new feature/static file you create.
```shelll
git checkout -b <yourbranch>
```
2. Code on that branch

3. Merge it to master
