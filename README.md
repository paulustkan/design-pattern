# Link references

- https://refactoring.guru/
- https://regexr.com/
- https://regexone.com/

# Design pattern

## Composite
- Get sum of all items in recursion tree
- Use abstract class
- Delegate the work to its sub-elements
- Applicability: create form element

## Decorator
- Add new behavor following an object by wrapper
- Use interface
- Applicability: check and remove unnecessary texts in content

# Regular Expression (Javascript)

## A character

`[aeiou]`
get any character that inside []

`[^aeiou]`
get any character that without inside []

`[g-s]`
get any character that in range g -> s

`.`
`^\n\r]`
get any character except linebreaks

`\s\S]`
get any character including linebreaks

`\w`
get any character that is alphanumeric and underscore

`\W`
get any character that is not alphanumeric and underscore

`\d`
`[0-9]`
get any character that is number

`\D`
`[^0-9]`
get any character that is not number

`\s`
matches any whitespace character (spaces, tabs, line breaks)

`\S`
matches any character that is not whitespace

## A position (not a character)

`^\w`
`^` beginning by the word

`\w$`
`$` ending by the word

`word_you_want\b`
matches position that following word_you_want is not word (alphanumeric and underscore)

`word_you_want\B`
matches position that is not a word boundary

## Escaped character

`\t`
tab

`\+`
plus

...

##  Groups & References

`(abc)`
matches words that is abc

`(abc)+`
matches words that is abc or abcabc, abc... (one or more abc)

## Quantifiers & Alternation

`colou?r`
`?` matches 0 or 1 of the preceding token (will `color`, `colour`)

`b\w+`
`+` matches 1 or more of the preceding token (`\w` has 1 or more)

`b\w*`
`*` matches 0 or more of the preceding token (`\w` has 0 or more)

`+?`
combines `+` and `?`, to get 1

`b\w{2,3}`
`{2,3}` matches between 2 and 3 of the preceding token (`\w` has 2 or 3)
`{2}` exactly 2
`{2,}` 2 or more

`b(a|e|i)d`
`|` like a boolean OR (will get `bad`, `bed`, `bid`)

## Substitution

## Lookaround

## Flags
