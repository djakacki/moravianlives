# How to encode in CWRC-Writer

1. Go to https://cwrc-writer.cwrc.ca/. If prompted, "Search all public CWRC Github documents" and type "BucknellDSC" into 'Limit to github user or organization"
and choose BucknellDSC/moravianlives
1. Follow this directory path: TEI_Memoirs>XML and then find the name of the person whose memoir you are going to encode.
1. Once the file loads you'll need to attach a new schema to it. Click on "Settings" at the top right, and choose "Add Schema". 
1. Type in "Moravian Lives" into the Schema Name field, and then this URL into the Schema URL field: https://raw.githubusercontent.com/BucknellDSC/moravianlives/master/TEI_Memoirs/out/MoravianMemoirs.rng
1. Now from the Schema dropdown menu choose Moravian Lives and click "Apply"

## What to encode, how, and when
Take several passes through the document, first proofreading against the image in the ImageViewer.

### Questions:
- Are we modernizing/standardizing spelling and capitalization?
- Are we capitalizing all proper nouns?
- Are we auto-correcting all misspelled words, or are we tracking the corrections with <sic>|<corr>?
- Are we keeping deletions and additions?
- Are we expanding contractions or leaving them as is?

The CWRC-Writer environment lets you edit directly into the body of the text. It also provides an easy tagging mechanism.
For "regular" TEI tags, highlight a word or phrase and click on "Tags" in the toolbar. This will give you a list of all available tags that are valid at that point in the document.
If you want to edit or change a tag, highlight it in the text and then right-click (command-click) on the tag in the "Structure" panel on the left.
For entities (people, places, dates, organizations) highlight the word or phrase and choose the entity icon in the toolbar.

