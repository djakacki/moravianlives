# How to encode in CWRC-Writer

1. Go to https://cwrc-writer.cwrc.ca/. If prompted, "Search all public CWRC Github documents" and type "BucknellDSC" into 'Limit to github user or organization"
and choose BucknellDSC/moravianlives
1. Follow this directory path: TEI_Memoirs>XML and then find the name of the person whose memoir you are going to encode.
1. Once the file loads you'll need to attach a new schema to it. Click on "Settings" at the top right, and choose "Add Schema". 
1. Type in "Moravian Lives" into the Schema Name field, and then this URL into the Schema URL field: https://raw.githubusercontent.com/djakacki/moravianlives/master/TEI_Memoirs/out/MoravianMemoirs.xml
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

You can also add and edit named entities (people, places, organizations, dates) by highlighting the word or phase and then 
then choosing the appropriate entity icon in the toolbar.

- for Date, you have the choice of tagging a single date or a date range
- for Person, when you highlight the name you will get a "Find a Person" popup that offers you existing authority IDs from VIAF, DBPedia, Getty, and Wikidata. You can also add a Moravian Lives entity (if we are "minting" an entity) by going to the "Other/Manual Input" field and adding in the appropriate URL from our personography:
- http://moravianlives.bucknell.edu/data/personography.html.
    - For example, if you wanted to tag Mary Gledhill as a person entity, and there isn't another authority ID for her (I'm pretty sure there isn't) then you would put http://moravianlives.bucknell.edu/data/personography.html#mlper000245 in the input field (the #mlper000245 is Gledhill's Moravian ID)
    - If you want to tag a person by their title, nickname, or family name (e.g., Sr Smith, Becky, Mother) and you know the identity of that person, you can do the same thing. In the search box you can type in the person's standard name (Conrad Weiser for Br Weiser, say) and then look for the options again. This way, any reference to that person will be tagged in the same way.
- We are still working through the "placeography"/gazetteer, which is complicated because of geopolitical, cultural, and temporal issues. So for the time being just tag places with <placeName> from the regular tag menu, and keep note of them.

