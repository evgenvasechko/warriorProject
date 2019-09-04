from flask import render_template, flash, redirect, url_for
from app import app
from app import db
from app.forms import ContactForm

@app.route('/')

@app.route('/index')
def index():
	return render_template ('index.html')

@app.route('/gallery')
def gallery():
	return render_template ('gallery.html')

@app.route('/catalog', methods=['GET', 'POST'])
def catalog():
	return render_template ('catalog.html')

def contact():
	form = ContactForm()
	if form.validate_on_submit():
		flash('Done!')
		return redirect('/index')
	return render_template ('catalog.html', form=form)