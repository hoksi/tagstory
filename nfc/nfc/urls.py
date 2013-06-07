from django.conf.urls import patterns, include, url
from apps.views import *
import os.path
# Uncomment the next two lines to enable the admin:
# from django.contrib import admin
# admin.autodiscover()
stylesheet = os.path.join( 'stylesheet'
)
scripts = os.path.join( 'scripts'
)
images = os.path.join(
	'images'
)
files = os.path.join( 'files'
)
print images
urlpatterns = patterns('',
	(r'^$',index),
	(r'^chatting/(\w+)/(\w+)',chatting),	
    (r'^join',join),
    (r'^main',main),
    (r'^connect/(\w+)',connect),

    #(r'^files/(?P<path>.*)$', 'django.views.static.serve', { 'document_root': files} ),
    (r'^stylesheet/(?P<path>.*)$', 'django.views.static.serve', { 'document_root': stylesheet} ),
    (r'^scripts/(?P<path>.*)$', 'django.views.static.serve', { 'document_root': scripts} ),
    (r'^images/(?P<path>.*)$', 'django.views.static.serve', { 'document_root': images} ),



	# Examples:
    # url(r'^$', 'nfc.views.home', name='home'),
    # url(r'^nfc/', include('nfc.foo.urls')),

    # Uncomment the admin/doc line below to enable admin documentation:
    # url(r'^admin/doc/', include('django.contrib.admindocs.urls')),

    # Uncomment the next line to enable the admin:
    # url(r'^admin/', include(admin.site.urls)),
)
