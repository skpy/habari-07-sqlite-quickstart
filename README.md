Habari 0.7 SQLite on OpenShift
=========================
Habari is a modern PHP blogging platform.

http://habariproject.org/

Running on OpenShift
--------------------

Create an account at http://openshift.redhat.com/

Create a PHP application

	rhc-create-app -a habari -t php-5.3 -l $USERNAME

Add this upstream Habari quickstart repo

	cd habari/php
	rm -rf *
	git remote add upstream -m master git://github.com/skpy/habari-07-sqlite-quickstart.git
	git pull -s recursive -X theirs upstream master

Then push the repo upstream to OpenShift

	git push

That's it, you can now checkout your application at:

	http://habari-$yourlogin.rhcloud.com

Your first visit to your app's URL will create the SQLite database.
	username = admin
	password = habari
Please log in and change your password.
