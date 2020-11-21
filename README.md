# MTAAC Gold Corpus

## License
MTAAC Gold Corpus by MTAAC Contributors (see [CONTRIBUTORS.txt](https://github.com/cdli-gh/mtaac_gold_corpus/blob/master/CONTRIBUTORS.txt))

To the extent possible under law, the person who associated CC0 with MTAAC Gold Corpus has waived all copyright and related or neighboring rights to MTAAC Gold Corpus.

You should have received a copy of the [CC0 legalcode along with this work](https://github.com/cdli-gh/mtaac_gold_corpus/blob/master/LICENSE).  If not, see <http://creativecommons.org/publicdomain/zero/1.0/>.

Annotations derived from the ETCSRI corpus (`morph/external`) are released to the public domain just like the rest of the content of this repository, but note the specific instructions for citation below.

### Citation
If you use this data in any way in academic context, authors must be cited (see CONTRIBUTORS.txt). 

In scientific papers, please refer to the associated article:

	Chiarcos, C.; Khait, I.; Pagé-Perron, É.; Schenk, N.; Jayanth; Fäth, C.; Steuer, J.; Mcgrath, W.; Wang, J. (2018), 
	Annotating a Low-Resource Language with LLOD Technology: Sumerian Morphology and Syntax. Information 9(11): 290, 
	[https://www.mdpi.com/2078-2489/9/11/290]

The directory `morph/external` contains data partially derived from the ETCSRI corpus. If you use this data, please attribute the original creators, as well:

	ETCSRI is developed at the Department of Assyriology and Hebrew Studies (Institute of Ancient Studies, Eötvös L. University, Budapest) 
	by Gábor Zólyomi as part of The Open Richly Annotated Cuneiform Corpus with the continuous assistance and help of Steve Tinney. 
	
	It can be cited as :
	Zólyomi, Gábor - Tanos, Bálint - Sövegjártó, Szilvia. The Electronic Text Corpus of Sumerian Royal Inscriptions. 2008-. 
	http://oracc.museum.upenn.edu/etcsri/index.html

## Description
In this repository is the annotation gold corpus for the MTAAC project.

As of Nov 21, 2020, it contains
- 15,502 tokens (372 texts) with morphological annotation from the Ur III corpus, manually annotated within the MTAAC project, balanced for genres
- 9,075 tokens (610 texts) with morphological annotation from the Ur III corpus, annotations automatically derived from the ETSCRI corpus, genre: royal inscriptions

## Gold corpus selection
See https://cdli-gh.github.io/research_select.html

## History
2020/11/21 external folder added with ETSCRI-based annotations projected onto CDLI transcriptions, see `morph/external/build.sh`
2018/03/07 initial release

## TODO
- `morph/external`: address minor tagset consistency issues in the ETSCRI conversion, e.g. `NF.V.SUB` should be `NF.V.PT`