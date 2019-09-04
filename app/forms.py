from flask_wtf import FlaskForm
from wtforms import TextField, TextAreaField, SubmitField
from wtforms.validators import DataRequired

class ContactForm(FlaskForm):
	name = TextField('name', validators=[DataRequired()])
	email = TextField('email', validators=[DataRequired()])
	phone = TextField('phone', validators=[DataRequired()])
	submit = SubmitField('send')