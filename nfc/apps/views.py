# Create your views here.
#!/usr/bin/python
# -*- coding: utf-8 -*-
from django.http import HttpResponseRedirect
from django.http import HttpResponse
from libs.lib import *
from datetime import date,timedelta 

def index(request):
	#return HttpResponseRedirect('kakaolink://')
	return HttpResponse("hello world")

def join(request):
	return render_to_response(
		'join.html',
		{
			'request':request
		}
	)

def main(request):
	return render_to_response(
		'main.html',
		{
			'request':request
		}
	)
	
def chatting(request,room="",idx=""):
	return render_to_response(
		'chatting.html',
		{
			'request':request,
			'room':room,
			'id':idx,
			'date':date.today()
		}
	)

def connect(request,idx='default'):	
	return HttpResponseRedirect('kakaolink://')

