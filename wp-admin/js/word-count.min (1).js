!function(){function a(a){var b,c;if(a)for(b in a)a.hasOwnProperty(b)&&(this.settings[b]=a[b]);c=this.settings.l10n.shortcodes,c&&c.length&&(this.settings.shortcodesRegExp=new RegExp("\\[\\/?(?:"+c.join("|")+")[^\\]]*?\\]","g"))}a.prototype.settings={HTMLRegExp:/<\/?[a-z][^>]*?>/gi,HTMLcommentRegExp:/<!--[\s\S]*?-->/g,spaceRegExp:/&nbsp;|&#160;/gi,HTMLEntityRegExp:/&\S+?;/g,connectorRegExp:/--|\u2014/g,removeRegExp:new RegExp(["[","!-@[-`{-~","\x80-\xbf\xd7\xf7","\u2000-\u2bff","\u2e00-\u2e7f","]"].join(""),"g"),astralRegExp:/[\uD800-\uDBFF][\uDC00-\uDFFF]/g,wordsRegExp:/\S\s+/g,characters_excluding_spacesRegExp:/\S/g,characters_including_spacesRegExp:/[^\f\n\r\t\v\u00AD\u2028\u2029]/g,l10n:window.wordCountL10n||{}},a.prototype.count=function(a,b){var c=0;return b=b||this.settings.l10n.type,"characters_excluding_spaces"!==b&&"characters_including_spaces"!==b&&(b="words"),a&&(a+="\n",a=a.replace(this.settings.HTMLRegExp,"\n"),a=a.replace(this.settings.HTMLcommentRegExp,""),this.settings.shortcodesRegExp&&(a=a.replace(this.settings.shortcodesRegExp,"\n")),a=a.replace(this.settings.spaceRegExp," "),"words"===b?(a=a.replace(this.settings.HTMLEntityRegExp,""),a=a.replace(this.settings.connectorRegExp," "),a=a.replace(this.settings.removeRegExp,"")):(a=a.replace(this.settings.HTMLEntityRegExp,"a"),a=a.replace(this.settings.astralRegExp,"a")),a=a.match(this.settings[b+"RegExp"]),a&&(c=a.length)),c},window.wp=window.wp||{},window.wp.utils=window.wp.utils||{},window.wp.utils.WordCounter=a}();