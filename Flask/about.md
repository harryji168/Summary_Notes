Flask is a micro web framework written in Python. It is classified as a microframework because it does not require particular tools or libraries.[2] It has no database abstraction layer, form validation, or any other components where pre-existing third-party libraries provide common functions. However, Flask supports extensions that can add application features as if they were implemented in Flask itself. Extensions exist for object-relational mappers, form validation, upload handling, various open authentication technologies and several common framework related tools.[3]

Applications that use the Flask framework include Pinterest and LinkedIn.[4][5


Written in	Python


Create an environment
Create a project folder and a venv folder within:

macOS/LinuxWindows
$ mkdir myproject
$ cd myproject
$ python3 -m venv venv
Activate the environment
Before you work on your project, activate the corresponding environment:

macOS/LinuxWindows
$ . venv/bin/activate
Your shell prompt will change to show the name of the activated environment.

Install Flask
Within the activated environment, use the following command to install Flask:

$ pip install Flask



python examples/sqla/run_server.py


install git
git clone https://github.com/Vukan-Markovic/Book-evaluator.git
install python
install python3
install virtualenv
virtualenv -p python3 venv
source venv/bin/activate
pip install -r requirements.txt
export FLASK_APP=application.py
export FLASK_DEBUG=1
flask run App is running on http://127.0.0.1:5000.