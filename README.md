# PHP Guestbook

## Learning objectives

- 🤔1️⃣storing data in files
- 🤔1️⃣converting complex constructs (array/objects) to string representation
- ❌1️⃣deliver a project under a strict deadline

> Note: At the end of day 1️⃣ I was storing data in the file but instead of storing an array or array element, I was storing string after string.  
> In the second day, with [Sven's](https://github.com/Sven-I-Am) immense help, I fixed it and it now saves correctly.

## Assignment duration and type

We initially had 1️⃣ day but since most (including me) did not manage to finish it on time, we got a second day 🙏

## The mission

It is time for our first php Consolidation challenge! Let's remember the internet of the 1990, and create a classic widget that every site in that decade had: a guestbook.  
Any visitor on te page can leave a message on your page that are then saved and showed (last message on top) for everybody who visits the page.

## How to store the messages?

- uou can store the messages in a file on your system. You can use the brother of `file_get_contents()` for this: `file_put_contents()`.
- you can either use `json_encode()` or `serialize()` to convert your array to a string to store.

## Must-have features

- Posts must have the following attributes:

  - ✔1️⃣title
  - ✔1️⃣date
  - ✔1️⃣content
  - ✔1️⃣author name

- ✔2️⃣Use at least 2 classes: PostLoader & Post
- ✔2️⃣The messages are sorted from new (top) to old (bottom)
- ❌2️⃣Make sure the script can handle site defacement attacks: use `htmlspecialchars()`
- ✔2️⃣Only show the latest 20 posts.
