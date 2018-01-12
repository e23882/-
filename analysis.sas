
%macro a(x);data t;set &x ;run;%mend a;%a(x="C:\academic\home teach\teaching score\t.sas7bdat");  

data t;set t;
if city='臺北縣' then city='新北市';
run;

proc means data=t; var  c_36 c_37 c_38 c_39 a_1 a_2 a_5 c_16 c_19 c_27 c_28 c_29 c_30 c_31 ;run;  

proc freq data=t; table a_1 a_2 a_7 c_1 c_2 c_3 c_5 c_7 c_10 c_17 c_18 c_21 c_22 c_23 c_24 c_25 c_32 c_33 c_34 city; run;  

%macro a(x);
proc means data=t;
class &x;
var c_36;
run;
%mend a;
%a(a_1);
%a(a_2);
%a(a_7);
%a(c_1);
%a(c_2);
%a(c_3);
%a(c_5);
%a(c_7);
%a(c_10);
%a(c_17);
%a(c_18);
%a(c_21);
%a(c_22);
%a(c_23);
%a(c_24);
%a(c_25);
%a(c_32);
%a(c_33);
%a(c_34);
%a(city);

proc corr data=t; var c_36 c_37 c_38 c_39 a_1 a_2 a_5 c_16 c_19 c_27 c_28 c_29 c_30 c_31 ; run;  

%macro a(x); 
proc ttest data=t;
class 
&x;
var c_37;
run;
%mend a;
%a(a_2);
%a(a_7);
%a(c_2 );
%a(c_17);
%a(c_18);
%a(c_23);
%a(c_25);
%a(c_34);

proc glm data=t;
class a_1 (ref='104');
model c_37=a_1/solution;
run;

proc glm data=t;
class c_1 (ref='99');
model c_37=c_1/solution;
run;

proc glm data=t;
class c_3 (ref='IE');
model c_37=c_3/solution;
run;

proc glm data=t;
class city (ref='臺北市');
model c_37=city/solution;
run;

Proc glmselect data=t;
class a_1 a_2 c_1 (ref='99') c_3 (ref='IE') a_7 c_2 c_17 c_18 c_25 c_32 c_34 c_23;
Model c_37 = a_1 a_2  c_1 c_3 a_7 c_2 c_17 c_18 c_25 c_32 c_34 c_23 a_1 a_2 a_5
c_16
c_19
c_27
c_28
c_29
c_30
c_31
/selection=stepwise(select=SL SLE=0.05) ;
Run;
