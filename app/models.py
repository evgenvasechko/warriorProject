from app import db

class Gallery(db.Model):
	id = db.Column(db.Integer, primary_key=True)
	product_name = db.Column(db.String(128), index=True, unique=True)
	I_file_link = db.Column(db.String(128), index=True, unique=True)
	II_file_link = db.Column(db.String(128), index=True, unique=True)
	III_file_link = db.Column(db.String(128), index=True, unique=True)
	IV_file_link = db.Column(db.String(128), index=True, unique=True)