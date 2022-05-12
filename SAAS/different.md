https://www.ionos.ca/digitalguide/websites/web-development/sass/#:~:text=This%20stylesheet%20language%20is%20strongly,Ruby%2C%20while%20LESS%20uses%20JavaScript.


SCSS vs. SASS: what are the differences?
There’s not only one syntax that you can use SASS in, but two: One has the original form, which is usually referred to as “indented syntax” or simply “SASS” for short. But there is also a new variant, which is more strongly oriented to the standards of CSS and so is called sassy CSS (SCSS) – so, SASS-style CSS. Version 3 of SASS has SCSS as an official syntax. The biggest difference: the use of parentheses and semicolons.

The original SASS syntax works with indents and line breaks, a process adapted from YAML. To finish a line of code, it’s sufficient to insert a line break – so press the enter key. Indents function simply using the tab button. Groupings, called declaration blocks, are formed by changing the position in the typeface. This isn’t possible with CSS itself. Here, you have to use parentheses for the groupings and semicolons for the property declarations. This is exactly what’s necessary for SCSS.

The variations command fierce loyalty: Some users swear by the simple handling of the original SASS, where you don’t have to pay attention to the correct positioning of the parentheses when moving snippets of source code and can generally create slimmer, clearer code. You end up with fewer characters and lines overall as a result of the “indented syntax.” The SCSS enthusiasts, on the other hand, are happy to take the additional effort in stride, because it’s more similar to what you already know from using CSS.

SCSS is a superset of CSS, which guarantees that the CSS code fundamentally works in SCSS as well – but not the other way around. The functions of SASS are still fully contained, though. This makes it easier to work with both languages at the same time. In addition, people who already work with CSS and are comfortable with the syntax have a much easier time switching over. Even though SASS supports both syntaxes, you still have to decide for each project: to be able to distinguish between the different formats, give the files either the file ending “.sass” or “.scss.”

Advantages and disadvantages of SASS
SASS brings a lot of benefits to the table, but the preprocessor still doesn’t convince everyone. The advantages are obvious: The preprocessor language gives users more possibilities when creating code. Many web designers, for example, love the function that allows you to store colors as variables instead of always having to enter the color value as a hexadecimal number. Mixins, variables, inheritance, and nesting do a better job than traditional CSS in ensuring that you follow the principle “Don’t repeat yourself.” This theory pushes for avoiding repetition in code and keeping source code slimmer. These changes also significantly reduce the effort required. Instead of having to make changes in multiple different places, you can just make one change at a central position.

The disadvantages of SASS apply to basically every preprocessor, and refer to the fact that the created code first has to be compiled. This adds another step to the development process. This makes the process a bit lengthier. Instead of being able to make modifications directly in the CSS file and see the effects immediately on the website, changes in the design first have to be translated into CSS. This allows errors to slip in and makes debugging more difficult.

Before using SASS – just like with any other unfamiliar technology – you need to take the time to learn the new language. In addition to CSS, which you should already know in any case, it’s simply another language to master.

Advantages	Disadvantages	 
More possibilities	Code has to be compiled	 
Clear code	Difficult troubleshooting	 
Extensive frameworks	Higher learning effort	 
Work with mixins and variables	 	 
SASS vs. LESS – a comparison of the two preprocessors
In addition to SASS, LESS has also established itself in developer circles. This stylesheet language is strongly oriented around CSS and resembles SCSS in its syntax. Both preprocessors share some of the same properties: Both SASS and LESS allow for the use of mixins and variables. One difference, though, is that SASS is based on Ruby, while LESS uses JavaScript. But even this doesn’t give either of the preprocessors an advantage over the others.

The real differences are found instead in the logical functions: LESS gives users the opportunity to only activate mixins when specific situations occur. This is a helpful feature, but it represents the extent of logical links in LESS. SASS, on the other hand, offers loops and case distinctions as known from programming languages.

With SASS, users are free to choose between “indented syntax” or SCSS. Each developer can decide for themselves whether they would like to move away from the CSS rules or stay closer to the original. LESS doesn’t offer this choice. Here, users have to stick with the old rules. Code in LESS is automatically a superset of CSS: All source text formulated in CSS also functions in LESS – just like with SCSS.

SASS is much more popular among web designers. But this could be because SASS is a bit older. LESS was originally supported by the well-regarded frontend framework Bootstrap, which relied on the younger preprocessor. But with version 4, the project officially switched to SASS, which boosted the popularity of syntactically awesome style sheets even further.