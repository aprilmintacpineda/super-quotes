# JSON collection of quotes

A collection of quotes from different people in TEXT, JSON, and various arrays for different languages.

##### statistics

- 876 quotes
- 773 authors

###### language support

- JavaScript
- PHP (Associative and Numeric arrays)

# Information about the machine used while creating this

- Windows 10
  - Version 1703
  - OS Build 15063.413
  - x64 OS
- PHP
  - Version 7.0.10
  - Zend Engine v3.0.0

If it doesn't work on your machine, please open an issue and tell me about it.

# Run this

```
git clone https://github.com/four-eyes-04-04/super-quotes.git
cd super-quotes
php generate
```

Output will be created at the **combined** directory or simply dowload from the **combined** directory.

# Generates the following

### JSON

Contains all the quotes as a JSON file that has the following structure:

```
[
  {
    "quote": "This is a very wonderful quote.",
    "name": "The Author"
  },
  {
    "quote": "Another wonderful quote",
    "name": "Another Author"
  }
]
```

### Text

Contains all the quotes as a text file, one quote per line with the author after the `~` at the end of every quotes.

### Various arrays

###### PHP
- `numeric array`, contains all the quotes as a numeric array, one quote per index of the array with the author after the `~` at the end of every quotes.
- `associative array`, contains all the quotes as an associative array, one quote per index of the array with the keys `quote` for the quote body and `name` for the author's name.

###### JavaScript
- Contains all quotes as an array, one quote per index of the array with the author after the `~` at the end of every quotes.

# Want to add more quotes?
Put all your quotes in the **raw** directory as one of the following:

###### As text files
One quote per line and make sure that the format looks strictly like:

```
This is a very wonderful quote. ~The Author
Another wonderful quote. ~Another Author
```

###### As JSON
Make sure that the structure looks strictly like the following:

```
[
  {
    "quote": "This is a very wonderful quote.",
    "name": "The Author"
  },
  {
    "quote": "Another wonderful quote",
    "name": "Another Author"
  }
]
```

Then after doing so, just run `php generator` again to combine all the quotes in one JSON file.

Do make pull requests to enlarge our collection of quotes, and update the credits section of this readme.

# Credits: Quotes came from them.

- [robatron](https://gist.github.com/robatron/a66acc0eed3835119817)
- [sathya-me](https://github.com/sathya-me/LoginQuotes/blob/master/Quotes.txt)
- [dmakk767](https://gist.github.com/dmakk767/9375ff01aff76f1788aead1df9a66338)

# {} with <3
April Mintac Pineda

- [Linkedin](https://www.linkedin.com/in/april-pineda/)
- <aprilmintacpineda@gmail.com>

Cheers!