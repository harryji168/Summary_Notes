https://stackoverflow.com/questions/10186913/html5-textarea-placeholder-not-appearing

his one has always been a gotcha for me and many others. In short, the opening and closing tags for the <textarea> element must be on the same line, otherwise a newline character occupies it. The placeholder will therefore not be displayed since the input area contains content (a newline character is, technically, valid content).

Good:

<textarea></textarea>
Bad:

<textarea>
</textarea>