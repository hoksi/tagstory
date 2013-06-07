# -*- coding: utf-8 -*-
from jinja2 import FileSystemLoader, Environment
from django.http import HttpResponse
from django.conf import settings
import locale
import urllib

locale.setlocale(locale.LC_ALL, '')
template_dirs = getattr(settings,'TEMPLATE_DIRS')
default_mimetype = getattr(settings, 'DEFAULT_CONTENT_TYPE')
env = Environment(loader=FileSystemLoader("templates"),autoescape=True)

def render_to_response(filename, context={},mimetype=default_mimetype):
    template = env.get_template(filename)
    rendered = template.render(**context)
    return HttpResponse(rendered,mimetype=mimetype)