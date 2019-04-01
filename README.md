# PAAN PHP AND JS UTILITY
### Paan is a library or source code that allows to easily fish out palindromes in a phrase, word or sentence. With PAAN, you can get all palindromes in a series of letters and the largest and smallest. Every block of code in the php source corresponds of code in the javascript source.

Usage Example:

```
	$text = "AABMRRATFEDEFNABITTIBANTAADDFGFDFFDERTARRMBAABMRRATFEDEFNABITTIBANTA";
	$palds = paan($text);
```

## JS:
`console.log($palds);`
## PHP:
`print_r($palds);`

Calling the function returns an object with 3 elements:

## In PHP:
```
	Array (
		"matches" #contains all the matched palindromes
		"largest" #the longest palindrome
		"smallest" #shortest palindrome
	)
```

## In JS:
```
	{
		"matches" #contains all the matched palindromes
		"largest" #the longest palindrome
		"smallest" #shortest palindrome
	}
```

** Incase of suggestions, feel free to open issues or contact me: ([url=mailto:joloashobatmat@gmail.com]jolaoshobatmat@gmail.com[/url])