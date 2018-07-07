# trivagoAcceptanceTest
A solution provided for Task 2 of the Trivago challenge

Task 

Create 5 different automated test cases for the things that you think are important to automate. 
Explain in detail why you choose these tests. 
What are the limitations of this test. 
Generate test results for every run. 
Describe why you choose this method technology. 
Please push your project to a git repository. 
Attach the link to your test results. 
Add a small step by step tutorial to execute your automated test.


Answers:

a. Important scenarios to test are:

- Search a very touristic place scenario + open the most relevant result and make a proceed to deal
- Filter by price 
- Log in  and log out
- Log in and check Booking Overview
- Create an account

In my very first attempt to work with Codeception and php I have managed to automate only the first 2 scenarios in the provided solution. 

b. I would automate these scenarios because they provide the biggest business value. When automating, it should be evaluated which are the riskiest aka the most frequently used functionalities as well as which have the greatest impact on the users and the business and try to always cover those with your suite.

c. The limitation of the automated tests is that they require development efforts, therefore are more expensive then the manual tests, and they need to be maintained throughout the lifecycle of the application. Therefore the automated tests can not cover everything, so a carefully selected scenarios should be chosen for automation.

d. Results can be found in _output/report.html

e. I would chose automation in order to perform Regression testing. A good practice is to have two different suites: a very fast regression test that can be executed on every deploy of a development branch, and a more robust regression testing suite that can be executed periodically (like overnight or only before release). 

f. https://github.com/jasnatrgachevska/trivagoAcceptanceTest

g. 

h. Step to step guide how to execute the automated tests 
- Install codeception, refer to the first step of the official website for details https://codeception.com/quickstart
- Add the path to codeception to your PATH variable (this step changes depending on your O.S, google it if you don’t know how to do it)
- Clone the git repository 
- Open a console and navigate to the project folder
- Run “codecept run —html”
- Check the results in the console or in _output/report.html
- Have fun
