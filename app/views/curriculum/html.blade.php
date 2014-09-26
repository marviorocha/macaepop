<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0//EN" "http://www.w3.org/Math/DTD/mathml2/xhtml-math11-f.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!--This file was converted to xhtml by LibreOffice - see http://cgit.freedesktop.org/libreoffice/core/tree/filter/source/xslt for the code.--><head profile="http://dublincore.org/documents/dcmi-terms/"><meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8"/><title xml:lang="en-US">- no title specified</title><meta name="DCTERMS.title" content="" xml:lang="en-US"/><meta name="DCTERMS.language" content="en-US" scheme="DCTERMS.RFC4646"/><meta name="DCTERMS.source" content="http://xml.openoffice.org/odf2xhtml"/><meta name="DCTERMS.issued" content="2014-09-15T15:19:46.054000000" scheme="DCTERMS.W3CDTF"/><meta name="DCTERMS.modified" content="2014-09-15T15:52:25.495000000" scheme="DCTERMS.W3CDTF"/><meta name="DCTERMS.provenance" content="" xml:lang="en-US"/><meta name="DCTERMS.subject" content="," xml:lang="en-US"/><link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" hreflang="en"/><link rel="schema.DCTERMS" href="http://purl.org/dc/terms/" hreflang="en"/><link rel="schema.DCTYPE" href="http://purl.org/dc/dcmitype/" hreflang="en"/><link rel="schema.DCAM" href="http://purl.org/dc/dcam/" hreflang="en"/><style type="text/css">
@page {  }
table { border-collapse:collapse; border-spacing:0; empty-cells:show }
td, th { vertical-align:top; font-size:12pt;}
h1, h2, h3, h4, h5, h6 { clear:both }
ol, ul { margin:0; padding:0;}
li { list-style: none; margin:0; padding:0;}
<!-- "li span.odfLiEnd" - IE 7 issue-->
li span. { clear: both; line-height:0; width:0; height:0; margin:0; padding:0; }
span.footnodeNumber { padding-right:1em; }
span.annotation_style_by_filter { font-size:100%; font-family:Arial; background-color:#fff000;  margin:0; border:0; padding:0;  }
* { margin:0;}
.P1 { font-size:12pt; font-family:Calibri; writing-mode:lr-tb; color: #3E3E3E }
.P2 { font-size:12pt; font-family:Calibri; writing-mode:lr-tb; font-weight:bold; }
.P3 { font-size:12pt; font-family:Liberation Serif, Times New Roman; writing-mode:lr-tb; text-align:center ! important; }
.P4 { font-size:12pt; font-family:Calibri; writing-mode:lr-tb; }
.Standard { font-size:12pt; font-family:Liberation Serif, Times New Roman; writing-mode:lr-tb; }
.Internet_20_link { color:#000080; text-decoration:underline; }
.T1 { font-family:Calibri; font-size:18pt; font-weight:bold; }
.T2 { font-family:Calibri; font-size:15pt; font-weight:bold; }
.T3 { font-family:Calibri; }
.T4 { font-family:Calibri; font-weight:bold; }
 
<!-- ODF styles with no properties representable as CSS -->
.WW8Num1z0 .WW8Num1z1 .WW8Num1z2 .WW8Num1z3 .WW8Num1z4 .WW8Num1z5 .WW8Num1z6 .WW8Num1z7 .WW8Num1z8  { }
</style></head><body dir="ltr" style="max-width:21.001cm;margin-top:2cm; margin-bottom:2cm; margin-left:2cm; margin-right:2cm; writing-mode:lr-tb; "><p class="P4"> </p><p class="P3"><span class="T1">Curriculum Vitae</span><span class="T2"><br/><br/></span></p><p class="Standard"><span class="T2">{{ $user->first_name }} {{ $user->last_name }}</span><span class="T3"><br/><br/></span><p class="Standard"><span class="T3">Endereço: {{ $cv->endereco }}, nº {{ $cv->numero }}. {{ $cv->bairro }},
<br> {{ $cv->cidade }} - {{ $cv->estado }} CEP: {{ $cv->cep }} </span></p><p class="Standard"><span class="T3">E-mail: </span>
<a href="mailto:{{ $user->email }}">

<span class="Internet_20_link">

<span class="T3">{{ $user->email }}</span></span></a></p><p class="P1">Telefone: {{ $cv->telefone }}</p>

<p class="P1">Celular: {{ $cv->celular }}</p><p class="P1"> </p>

 

<p class="P2">Formação Acadêmica:</p>

<p class="P1">{{ $cv->formacao }}</p>

 <p class="Standard"><span class="T3"><br/></span><span class="T4">Experiência Profissional:</span></p>{{ $cv->experiencia }}<p class="P1"> </p>
 
 <p class="Standard"><span class="T3"><br/></span><span class="T4">Idioma:</span></p>{{ $cv->idioma }}<p class="P1"> </p>


<p class="P2">Cursos:</p>{{ $cv->cursos }}</p>

<p></p>
<p class="Standard"><span class="T3"><br/></span><span class="T4">Outros:</span></p>{{ $cv->outros }}<p class="P1"> </p>


</body></html>