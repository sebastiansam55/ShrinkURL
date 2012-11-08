#!/usr/bin/env python
#ShrinkURL tester
import requests
import json
def main():
	url = "http://ssebastian.koding.com/index.php"
	#url = "http://httpbin.org/post"
	payload = {'longUrl': 'http://ssebastian.koding.com/index.php'}
	r = requests.post(url=url, data=payload)
	print r.content
	return 0

if __name__ == '__main__':
	main()

