#!/usr/bin/env python
#ShrinkURL tester
import requests
import json
def main():
	url = "http://ssebastian.koding.com/shrinkURL.php"
	#url = "http://httpbin.org/post"
	longUrl = 'http://ssebastian.koding.com/index.html'
	payload = {'longUrl': longUrl}
	r = requests.post(url=url, data=payload)
	print r.content
	return 0

if __name__ == '__main__':
	main()

