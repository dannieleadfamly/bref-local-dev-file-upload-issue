# Introduction
This repo contains the code for reproducing an issue with Bref where uploading files through Bref 2.X local dev images returns wrong mimetype. This is most likely the cause of upload being corrupted and the file getting stored in /tmp be not right.

## Steps to reproduce
1. Clone this repo
2. Run `make build`
3. Open your browser and go to `http://localhost:8100`
4. Upload a file
5. Submit and see the mime type result on the page
6. Confirm that uploaded file(s) always show `application/octet-stream` as mime type

To see the correct output, run `php -S localhost:8100` in the public folder and otherwise run the same steps at the file upload. Here it will show the correct file mime type.

## Expected result
The mime type should be of the correct mime type matching the uploaded file.
