# FAQ: How can I find the n-th link with a specific text?
This question is similar to FAQ: How to find a button with a specific text with XPath? but now we want to get the n-th match, not the first match. There are several good options for this. In the following lets assume the link text is "Download" and we want to click the 6-th link. As test page we use this external page:

link=Download@POS=6 - this is easy but works for links only

xpath=(//a[text()='Download'])[6] - same as above but in XPath notation

xpath=(//*[text()[contains(.,'Download')]])[6] - this searches for the text in any element and not just links.

# sign in click the second 'sign in'
name=cardNumber

xpath=(//input[contains(@id,"ember8")])[3]

xpath=//*[text()[contains(.,'Sign In')]][2]

