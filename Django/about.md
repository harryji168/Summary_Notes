Django is a Python-based free and open-source web framework that follows the model–template–views architectural pattern. It is maintained by the Django Software Foundation, an independent organization established in the US as a 501 non-profit. 


Install Django
Before you can use Django, you’ll need to install it. Our complete installation guide covers all the possibilities; this guide will get you to a simple, minimal installation that’ll work while you walk through the introduction.


sudo apt-get install python3-pip
pip
git clone https://github.com/django/django.git


https://nextgentips.com/2021/11/04/how-to-install-python-django-in-ubuntu-21-10/

2. Install Django Virtualenv
It is important to create a virtualenv because each project you create often comes with its installed libraries, so it is important to isolate each so that dependencies would not clash at any time.

For us to create a virtualenv we need to install pip. Pip is a package installer for python. So it is necessary to have this package. Pip has two methods of installation:

Using ensurepip
Using get-pip.py
using ensurepip to install pip
The simpliest way to install pip with ensurepip is to pass the following command which will install pi automatically.

$ python -m ensurepip --upgrade