# Link references

- https://refactoring.guru/
- https://regexr.com/
- https://regexone.com/

# Design pattern

## Composite (structural pattern)
- Get sum of all items in recursion tree
- Use abstract class
- Delegate the work to its sub-elements
- Applicability: create form element

## Decorator (structural pattern)
- Add new behavor following an object by wrapper
- Use interface
- Applicability: check and remove unnecessary texts in content

## Observer (behavioral pattern)
- When subject changes state, observers will change (observers subcribed in subject)
- Use Standard PHP Library interface SplSubject, SplObserver, class SplObjectStorage


# Regular Expression (Javascript)

## A character

`[aeiou]`<br/>
get any character that inside []

`[^aeiou]`<br/>
get any character that without inside []

`[g-s]`<br/>
get any character that in range g -> s

`.`<br/>
`^\n\r]`<br/>
get any character except linebreaks

`\s\S]`<br/>
get any character including linebreaks

`\w`<br/>
get any character that is alphanumeric and underscore

`\W`<br/>
get any character that is not alphanumeric and underscore

`\d`<br/>
`[0-9]`<br/>
get any character that is number

`\D`<br/>
`[^0-9]`<br/>
get any character that is not number

`\s`<br/>
matches any whitespace character (spaces, tabs, line breaks)

`\S`<br/>
matches any character that is not whitespace

## A position (not a character)

`^\w`<br/>
`^` beginning by the word

`\w$`<br/>
`$` ending by the word

`word_you_want\b`<br/>
matches position that following word_you_want is not word (alphanumeric and underscore)

`word_you_want\B`<br/>
matches position that is not a word boundary

## Escaped character

`\t`<br/>
tab

`\+`<br/>
plus

...

##  Groups & References

`(abc)`<br/>
matches words that is abc

`(abc)+`<br/>
matches words that is abc or abcabc, abc... (one or more abc)

## Quantifiers & Alternation

`colou?r`<br/>
`?` matches 0 or 1 of the preceding token (will `color`, `colour`)

`b\w+`<br/>
`+` matches 1 or more of the preceding token (`\w` has 1 or more)

`b\w*`<br/>
`*` matches 0 or more of the preceding token (`\w` has 0 or more)

`+?`<br/>
combines `+` and `?`, to get 1

`b\w{2,3}`<br/>
`{2,3}` matches between 2 and 3 of the preceding token (`\w` has 2 or 3)<br/>
`{2}` exactly 2<br/>
`{2,}` 2 or more

`b(a|e|i)d`<br/>
`|` like a boolean OR (will get `bad`, `bed`, `bid`)

## Substitution

## Lookaround

## Flags
