from django.db import models

# Create your models here.
class User(models.Model):
	name = models.CharField(max_length=1024,null=True)
	profile = models.CharField(max_length=1024,null=True)
	ip = models.CharField(max_length=15,null=True)
	rdate = models.DateTimeField(auto_now_add=True)

class Message(models.Model):
	user = models.ForeignKey(User)
	text = models.TextField(null=True)
	is_read = models.DateTimeField(null=True)
	ip = models.CharField(max_length=15,null=True)
	rdate = models.DateTimeField(auto_now_add=True)

class Room(models.Model):
	requester = models.IntegerField(default = 0,null=True)
	responser = models.IntegerField(default = 0,null=True)
	rtime = models.DateTimeField(auto_now_add=True)
	rtype = models.CharField(max_length=1,null=True)

