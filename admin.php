<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.7.1
*/error_reporting(6135);$Fb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Fb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$he=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($he)$$V=$he;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©–¨a'3IĞÊd«Â!S±æ¾:4ç§+Mdåg¯‹¬Çƒ¡îöt™°c‘†£õãé b{H(Æ“Ñ”t1É)tÚ}F¦p0™•8è\\82›DL>‚9`'C¡¼Û—889¤È xQØş\0îe4™ÍQÊ˜lÁ­P±¿V‰Åbñ‘—½T4²\\W/™æéÕ\n€` 7\"hÄq¹è4ZM6£TÖ\r­r\\–¶C{hÛ7\rÓx67Î©ºJÊ‡2.3å9ˆKë¢H¢,Œ!m”Æ†o\$ã¹.[\r&î#\$²<ÁˆfÍ)Z£\0=Ïr¨9ÃÜjÎªJ è0«c,|Î=‘Ãâù½êš¡Rs_6£„İ·­û‚áÉí€Z6£2B¾p\\-‡1s2ÉÒ>ƒ X:\rÜº–È3»bšÃ¼Í-8SLõÀí¼ÉK.ü´-ÜÒ¥\rH@mlá:¢ëµ;®úş¦îJ£0LRĞ2´!è¿«åAêˆÆ2¤	mıÑí0eIÁ­-:U\rüã9ÔõMWL»0û¹GcJv2(ëëF9`Â<‡J„7+Ëš~ •}DJµ½HWÍSNÖÇïe×u]1Ì¥(OÔLĞª<lşÒR[u&ªƒHÚ3vò€›ÜUˆt6·Ã\$Á6àßàX\"˜<£»}:O‹ä<3xÅO¤8óğ> ÌììCÎÚï1ƒ¢ÕHRâ¹ÕS–d9ªà¹%µU1–Snæa|.÷Ô`ê 8£ ¶:#€ÊàCÎ2‹¸*[oá†4X~œ7j \\ÁÃê6/¨09\rŞ;Êô;Vù„n¨nªÊØŞ‰v«k«HB%À.k\">º¡[ë­\n¼¬°lÍápÔ9ÒcFZsÍÒ|Ú>6 œ5­l1VçÒÎê6ÃØà7¬Œ:£\"AzŠ½de´å˜ı\\í5*ÿÕ´Ÿ]£p[*‡Am)Kt[»\n8g=;úúæ2z¾àÃ|üòÌ£4˜t8.üÅìN#ßÊ²Œ¿B\"Ë9°Øú%¨ªè„HQwˆqd²àFûû¤\$&V¦–Q#Q'×ò‹_Øm¡Ì¡µ· ˆ¡Ş\rĞà´hà Xrt0j5¤Œñâ½W‡øõ4µúÇ×“€mÕÿ•‡\"CA¸F!Ïì—–h>ßb0ˆ0 7;84Kaˆ¨Ò	\0Ôp	a‡€ÑHXF±Š1:÷8ìU9H‰IÃ³Ë;ÙsQ7F¤‹cLpXM@e˜şÉüƒå+g(›Ğ73Oì3pÆî•b®lEE>·Chb%²DÀI8²ÉE'Ì	#)ù=%C£€jYù1°ĞyÕh;cA‘6ãjKû\ráÁİ9Â˜\$|­–’¼øËg-Zˆo—\0ˆ“òz‰³\$+D¿°æV±w*ÓWƒpæJ›†\\û²FŸO³'É²a1Àm,_Ú§\r‹ä1‡Päo±;\0Ğ5°æíÁe\r& 3ğ^\r™µ6åMR2T\0¹à5?~‚5˜—ªP>‚85h¹ nì1;ÒÍ\rRL8`Á\\¤Ğ@ŒÒ`;z\ní\0ĞÔƒ8Áˆ9RÔyZP@¾ib?Æ­v\$ƒ<Ä%	A\ré?œ\0ÇSÊ¥¤¡í  ÌBÃ4JÒ¨ƒ:Á`#Hi¿7Îµº+}àîªÕvî¥°o¦J´ÀVÚ°‰Ú9ÕĞßWÁ2¬Q®\rØTáD`¯fâÑ ‹­wéLµ˜³£œI]MKd7*rk*j\nASæÂjFÙ-[ezzÏr²íÊfUø3Øæ~\\àüZ£¤Z’”{)¢ò>>Ğƒp¿…*«¤Á‚;zDbáwÔÊ]¤mC\nƒõœè¨“ÃKBôŞB£¡Šm@Æœ¬ÏÖ´>§¶õÏÍwUÂ’İ*Nô(ba¡Æ¶Š@fvÙ)­µ`·\0ußD)mD@/4öÒãë9j‰ˆíú¹ªëHBm1ˆ²I¨£5DÀ¶RuEÆÒ9 åAÓ—=1bİ0çŠe¿yÔØ1ûãsä¡;´Äô‚ĞÚÃĞ-¥ØËó†]s¡ˆ5–\\…‘\n1;Èè­×QÜ^©Êb“¬i;YJ2ƒd!sÁ”÷ƒ#ñkgÃhŞ]êW)>VÆ…I—x]Ãr³Ÿ÷;6ÒJLcpr°d{pyó¹Mıè-UVHè5'\nt®„Ğ²¤lÓÊşpHÛÂÍo°eÁZ€Ï¨Óùq’eÉÑXÛFé`Gy\rç½!î›Ww*íÁ‡¿D¯ôu­t%Œ¹šdàQğë¯/Õp™:şihÀt&ú˜ğPÅÌe,JÍŒÊàtÃ!ìOØ7´Ò6µGgRúƒšC[òËskëvqU¡}y©hëAGV²Ş×Ï|ÚlF Ş…L^Ê.ñŞ]u&w!ßÚ[jnŒnÀàÚ[kƒCÅàvÀßÁ÷k–rmOÉ­¾ÙJ>°ïWTâ0Şÿ·¼\n£pMãCø®¹½b›tÂ÷VG|oy8ô§Èù¯cé°èĞú");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n:Ìæsa”Pi2\nOgc	Èe6L†óÔÚe7Æs)Ğ‹\rÈHG’I’ÆÆ3a„æs'cãÑDÊi6œNŒ£ÑèœÑ2Hãñ8œuF¤R…#³””êr7‡#©”v}€@ `QŒŞo5šaÔIœÜ,2O'8”R-q:PÍÆS¸(ˆa¼Š*wƒ(¸ç%¿àp’<F)Ünx8äzA\"³Z-CÛe¸V'ˆ§ƒ¦ªs¢äqÕû;NF“1ä­²9ëğG¼Í¦'0™\r¦›ÙÈ¿±9n`ÃÑ€œX1©İG3Ìàtee9Š®:NeíŠıN±ĞOSòzøc‘Œzl`5âãÈß	³3âñyßü8.Š\rãÎ¹PÜú\rƒ@£®Ø\\1\rã ó\0‚@2j8Ø—=.º¦° -rÈÃ¡¨¬0ŠèQ¨êŠºhÄb¼Œì`À»^9‹qÚE!£ ’7)#Àºª*ÊÀQÆÈ‹\0ŠØÒ1«Èæ\"‘hÊ>ƒØú°ĞĞÆÚ-C \"’äX®‡S`\\¼¤FÖ¬h8àŠ²â Â3§£`X:Oñš,ª‡«Úú)£8ŠÒ<BğNĞƒ;>9Á8Òó‡c¼<‡#0Lª³˜Ê9”ç?§(øR‰#êe=ª©\n«Ãêª:*êÊ0ÖD³Ê9C±ˆ×@ĞÖ{ZO³ıêİ8­¦iªoV¨v¢k¨Arª8&£…ğø..ƒÑcH¡EĞ>H_h“ÎÕWUÙ5áô1r*œ¦Îö^Ğ(ÛbàxÜ¡Y1°ÚÔ&XHä6…Ø“.9‡x°Pé\r.`v4‡˜”¶†Ã8è4daXV‰6FÔÕEğHHºfc-^=äÂŞt™İx‹Y\rš%ö«xe çQû,X=1!ºsvéjèkQ2É“%ÚW?öÃÅ®Œ´æ=dY&Ù“¤VX4åÙ€Ì\\—5ĞßãXÃ¬!×}âæµNç¡gvÚƒWY*ÛQÅèi&ÈğlÃÎÑµZ#–İãñ Õ‘\rAç\$e°v5o#Ş›¢Øü¶5gc3MTC£L>vÎHéÜÃú–§<`ø°Ú* ]‚_ˆ£;%Ë;îÚV–ùi“Àèã4XÃé–'”Œ`ºªÉãi×j0g¶O±†Û¥“iæŒì©9·Æ™Û’dİFêÊÙk/lÅ¸–nÄÜc<b\n‰¨8×`‘H“ëeÅ}]\$Ò²úÖâ í°!†ÀÒÃC)±\$ °šAğ×`ó\0'•€&\0BÎ!íŒ)¥ò˜´5E)äÁàÒÂo\r„Ô8r`ûÈÌ!2ê­TÁ›s=¯DË©Õ>\n/ÅlğÓ‰’•[ı˜Å PÛàa‡8%ø!İ1v/¥¥SUcoJ¨:”4J+Bàó‡µv¯Jü‚\ráâÂb{ƒ ,|\0î°zöƒcÜªÅY§Ål®\nüœi.õÜ!äÛ)ü¦dmîJ«¯ÑÈ!'ÒÁë B\nC\\i\$J˜\"¾ëÖ2È+çIkJ––ñ\$Š‘’âG™y\$#Ü²i/¦CAb¾Ìb‚C(á˜:°ÊUX˜¯”2&	Ç, Q;~/¥õKy9×Ø?\r6¾°tVÊéÑ!º6‡CP³	hYëEÁÓÎØâ£ölñä(Ø–TáÒp'3ƒĞC<Ødc®¸?°yCçóşe0¼@&A?È=¤å%³A:JD&SQ˜Ñ6RÌ)A˜Ğb`0Ú@ˆéu9(!0R\n‡F „•ÂŠ ÄwC\\‰©Œ¤Ï…rÔäÜ™¡î¤#•~ğØ2'\$¡ :ĞØKÁ`h¬³@‰£Ebó¢[Ğ~¡Ñé’â TæÅlf5ª³BR]±{\"-¤Ğ\0è­ÊL>\rÇ\$@š\n(&\rÁˆ9‡\0vh*É‡°–*ÆXë!_djˆ˜ƒ†åpy¹‡‚¶‘`ájYwJ‚\$ØRªˆ(uaM+Áêníxs‚pU^€Ap`Í¤Iì’HÖ\n¨f—02É)!4aù9	À¢ê•EwCİĞ¡˜“Ë© ‰L×PÔİÄşAiĞ)êpø3äAuâÀöıAIAÉHu	ç!gÍ•’U”‰ZU·À¼c¤*­´À°M„ÃxfÆ:ËÆ^ÃXp+‘V°†±á²K‰C#+¾ ÖWhúCP!ÈÇÀ;”[pn\\%˜´k\0„ô²²,Ú¨8à7ã¬xQC\nY\röbÿ£XvC d\nA¼;‚‡lF,_wrğ4RPïù»HAµ!ô;™‰&^Í²…\"6;œå²êÎ=÷#CíI¡¸¯9fé'¬:¸ŸDY!ŒÿB+˜s¡xV†8lçÃ“¡\"Ïé‘ƒÍHU%\"Z6³Ôu\r©e0[Á•pÄßØa¡è.…À¶ +^`œ`b§5#CM‰\$² ûIçîËšAÌP§5C\rı S•dêWN6H[ïSR½µ·êß\\+Xë=k­õÎ»×ºş¼S”¶Ór^(¦ƒoo¶7™¬Ï©\\huk¢lHaC(màìşønRB†¤Uup³Ú2C1š[Æ|Ù½ùbeG0ĞÙ\"ìCG±²?\$x7Ğßn­¤\$ZÎ=ŸZÓ¦Ãsi5ËfÏí&ç,®fÓhiÆIÎyÖnî¶2ò0ÚœDvEüÃTïxôúMå{àô`Ü¤ÁGN#é‚Z,«Âƒ/âR\$”#\\I-	®„°—|Ä0à-0ı‰Nî¦P·ÉÒ¤;s-˜vô–ÏÒ†ÿ½‡nwGtï…n”¡ÒdiáH×|¥˜4¤(½¼+¼vò¥İ&ØÅ…’+KÀ£Ìñ™L\nJ\$Ô©ı†¨µ:\\Q<WB\"^—Íñ¤ºWTIB~Ñßq¬Éåğ}ó3ŸÎ¿\":şU‡á­Ö|\r5n(n™­ˆ‡ Ù7ƒÌOÁD}B}‹¼¨æÊ\0\r“voÜ•„…·Ø†_Jl‚Ä°•H3‘\"®[Ä¸âå¾ÔKŠAµ`ß–ù¯¦NÉÂü&(‚)\"ˆ fÿ&Å\0°¦ b¾ò¨lãF.Âjròî”şâJÂˆÆ\"P<\$F°*é|f/Ş! İOççŒpR Ç™„F#5gäbã Ä8eRDi¸É0“P‚+*¬üÆı™kZ;ÃpHh¦®l!è\0\r\nc›oÈ/¿úCBˆ<pyÀNTH½hêTç	ğ@éğpxÌ\$¢Šæ°ÌÀÖ48\n€Ò#îNU,Óˆš\$Pémò YKü¬\"H Ò †RıL¸ı‹®©DŸ\0‰¿âˆ€aWˆ`pûïşúĞgğ¯êlP¤Âÿoú:L€·Ê+\0 ]0±<)‚öN«xk\n(`cê„+r·k{m\"â3.0±H1’e*ZoeBÌ‹9\rÈøÚ\0RLi¥Q¨UğÔ‹`äÂ.”ûñÂ–o:Åd€´Â’µT7QœÑV »ÉDh‘âWæ´ëS1ñ	ñøgæ*2¯‘,†W)°Á@çÏ°T@C	Q(ñ,™Å4æ#d<Ò’\0¦! á\$˜ú2 {es¢´+…rÊ«şÍìÎJvY*ŒHPr\r¤‚†ÍTÜM\\\\`¼¿ívíàæ<ñ«&ÄnôD\\HHÈoj^@¢Ú	 Â<ñŠ†¯ëÆ8Š“*#fò©*Çş\r\nT§ \\\r²«*çTª^* ÚÉ Ê\$ª6oŞ7òĞRee8³ Êç²¡,Ò¥,Ó,`|9°K2Ï0r±+Ò§1RÖä\"È Õ* P*å¾È†M\\\rbà0\0ÂY\"ª\"ºUx†Ù`°±êÈ€àQ“E\rÀ~Q@5 ™5sZ³^fÀR@Q4ÈdÀ‚5Ãb\0@ÔFób/€8\"	8s‹8â<@šƒãìl2\$Sh± ¨\nÎR\"Uì43FNÉ«7\"D\rä4úOI3Â˜\n\0\n`¨``³â Y2Êğobñ3óË<n6“]<`ì\"’Ó Nˆ\"B2àZ\nˆüm¥ àEÀƒëîé\0ğ£üàZxÀ[2Â@,Â’’÷<Pİ?ô\rÔ8#d<@°´JUŠ¬K/E¡;\$«6óÌS”DU	l;¤,UÏLÎ’ñ7fcG\"EG€ó\$£¨\"E€Ù3FHÆ¤I“Ìãd‘=e	!ÒUHĞ‘23&jŠÈ¬Ó*úÂ%%Ó%2“,ŒÓJQ1HÌl0tY3öÁ\$X<CÄtà4ë_\$\0©ã>/F\nç¢?mF¬jÖ3¥p«Dá„HKœv ÈºÉœ\0Xâ*\rÊšåÑ\n0Ÿ‘e\nÎ%ïœºäÁ\riûÄêO€Ãfl‰Nö©M%]U¬Q¹Q½Lé­-†÷SÂ±T4Ğ! äU5T\nn˜di0#ˆEŠªM£ˆ³«i.ª°/U ¸é\rZFšúÓj„®¨;¢òíHÏâ˜d`m¤İ©ú–Ğ\nıt„ƒQS	eé²³|Ùi²šñ¬ÁQt¦ dò12,›öÁDYò1UQSU¬±cd±«µÄEˆ)\\«–¶ÂLö	ìF\$¶@öå³Vï{W6\"LlTÄëAò\$6abã‹OäêdrÌÉLp†c,’¨esÎ¨<2ì`Æ@b€XP\$3ààŒ@ËƒP,úKÍVÕ­^õ¾àÏM”‡Lö°¸ué1şÙ@îc•ˆt-ä( ¸ `\0‚9¶nïç2sb„¡Ê/ ĞFmä)¶ôƒ´ÿHl5ó@ÏnÌl\$‡q+ğ:®Â/ ¤ø§dŒÏ,òà\n€Şµˆì„£.4ú–’\$ ³w0\$€d·V0 È´\"¾ÃrìöW4678íVtqBau÷pÃ€ŠI<\$#Åx`Éwd9×^*kƒu×ofBEp	g2³Íóf4 à‰L!êr=¬\0§ñ\"	Ú\r<êÕhöÓÒæöˆU…%TÓhËëBkòº#>Å'C¥p\n ¤	(‚\r´ú2ö‡Â\"3â‹l•õMÔ‹7ıGÅx.ˆ,ÖUuØ%Dtø Ãw¶y^­Mf\" ‚ŠƒŞ(vU„3„u¬£J^HC_IU–YkS…—‡c_ylc†c]rF÷å×_q¤%†W#]@Ër²kv×3-ãcyÄÏVHJG<€Z¥öTè@V¸8œ\$6‡oƒ2H@˜\rã‚äÂª\0Âˆ=Øİö·æ¹\"3‹9zõ²:KõúÂu¯K >‚¢Œ¿B\$Ârİ.äJÒê<KõG~àP¿X´€QMÆ¹	XŒ‰w\$;Êæmp”Zp• åcK!OeOO¸?ïwpæÄæ‡¤í†Ö ¦ÚL—¶I\nŒğ•?9xB¤.]O:V®„˜ß9ßÃ.ÅmWŠ\0Ë—s>”*´l'«õk­Æoph»’èx¼‹‹«Şv´L`w1”÷° €è!¸M¨4\"òI\$Õ÷\"oõ\$À >Ë™Bea\"™ñŸDÿBoƒÊ¶ü+ì B0PxpŠ«&àá7Ã|p{|·Ï}7Ö°Â\$-P£‰‚éú@b„…¤õe¤ÆåÊVYmoMoŠ\0¢§£Nzn*>İÎ„€)¢ò·Èˆ×-H‡l!®“¼hpÆgÙË Š’¼Û&tZøãœ¤\0!‚¦8 É©¸¨àºZKŠê@DZG…Œ•Ÿº®øæ¶F€ç§©.† ˆ¼l¢üz%ÈÎ(ä¶xÙ}­ú'<šıÅª(°¼¥ú°ê<ÚXZÇ¬ºÚÑšà° É®g´ºí§ºò‡òw¯ºzÔz{°e¸'{;@å™±(&ø²ÅRà^Eèİ›xºå®›Y®ñ\"ËÌë¥MÜ’çç–VöÚ\n§5Ózl¥zrÔ[xŸ²Ëª’¥ú“»G\$O W @¤½À«Z¹xÇÎÕÄò­,Ì•”be»‰ 	ˆf£dÆ»Ğ2ûÕEÃ‹‹I¼D‘YTÙ%kš{ÎJ­\\\rºU N Å'¼_¾ÛÉ½»f|wŞµûàË,½l«7ªktø1RD>öĞ‹X‰ZîÍĞŠ­|y|Z{|×Õ¢Èî\r—é%;¬#\0eK¢	XÎ8&>7‡­ÖÎrhÎ:øLLª¶K*6U/\0004ØÎg™¢Eñc\n®jò•{Vœ[WF}#q İTÖû1abÆû\n‹1PÀÆ~íî((f+W‹?lîĞÑŠ·OÈüÒ#Dc€8€¸»Æ“šòkà\\@z×cÏ¦lñàé1lÆÌ—v~Õ ò(«L/cA%Ò#ÁbÈ„4Ó4Öíè÷ÍÑeZ2Ï®-\r…|ÑÎ1ÑŠ)ÎıK…<`¸Ù)2ÀW€“€X\røĞWÖd½>ÌÒ\nÌ­SX}Œ\rã‚¥EÔR¾(„â¼ÑÑ]`e9M•\0{Ù}šÕk+ƒÀË„¯ı³ÎÖ}Ò*&½'pƒ¤ÁË§ÎÏLó¬%DÂ}êwtëÕGwÔÀ÷Õ«oÕıçÎâ“CÀË×œùØSš«£´ıĞ\r<&ëB†8„mµ&‚€");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($ec){$rc=substr($ec,-1);return
str_replace($rc.$rc,$rc,substr($ec,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
remove_slashes($ed,$Fb=false){if(get_magic_quotes_gpc()){while(list($u,$V)=each($ed)){foreach($V
as$mc=>$U){unset($ed[$u][$mc]);if(is_array($U)){$ed[$u][stripslashes($mc)]=$U;$ed[]=&$ed[$u][stripslashes($mc)];}else$ed[$u][stripslashes($mc)]=($Fb?$U:stripslashes($U));}}}}function
bracket_escape($ec,$ra=false){static$Xd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($ec,($ra?array_flip($Xd):$Xd));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($B,$W,$Ba,$pc="",$Nc="",$Da=""){$J="<input type='checkbox' name='$B' value='".h($W)."'".($Ba?" checked":"").($Nc?' onclick="'.h($Nc).'"':'').">";return($pc!=""||$Da?"<label".($Da?" class='$Da'":"").">$J".h($pc)."</label>":$J);}function
optionlist($Rc,$vd=null,$me=false){$J="";foreach($Rc
as$mc=>$U){$Sc=array($mc=>$U);if(is_array($U)){$J.='<optgroup label="'.h($mc).'">';$Sc=$U;}foreach($Sc
as$u=>$V)$J.='<option'.($me||is_string($u)?' value="'.h($u).'"':'').(($me||is_string($u)?(string)$u:$V)===$vd?' selected':'').'>'.h($V);if(is_array($U))$J.='</optgroup>';}return$J;}function
html_select($B,$Rc,$W="",$Mc=true){if($Mc)return"<select name='".h($B)."'".(is_string($Mc)?' onchange="'.h($Mc).'"':"").">".optionlist($Rc,$W)."</select>";$J="";foreach($Rc
as$u=>$V)$J.="<label><input type='radio' name='".h($B)."' value='".h($u)."'".($u==$W?" checked":"").">".h($V)."</label>";return$J;}function
confirm($Pa=""){return" onclick=\"return confirm('".'Are you sure?'.($Pa?" (' + $Pa + ')":"")."');\"";}function
print_fieldset($q,$tc,$pe=false,$Nc=""){echo"<fieldset><legend><a href='#fieldset-$q' onclick=\"".h($Nc)."return !toggle('fieldset-$q');\">$tc</a></legend><div id='fieldset-$q'".($pe?"":" class='hidden'").">\n";}function
bold($ya){return($ya?" class='active'":"");}function
odd($J=' class="odd"'){static$p=0;if(!$J)$p=-1;return($p++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($u,$V=null){static$Gb=true;if($Gb)echo"{";if($u!=""){echo($Gb?"":",")."\n\t\"".addcslashes($u,"\r\n\"\\").'": '.($V!==null?'"'.addcslashes($V,"\r\n\"\\").'"':'undefined');$Gb=false;}else{echo"\n}\n";$Gb=true;}}function
ini_bool($ic){$V=ini_get($ic);return(eregi('^(on|true|yes)$',$V)||(int)$V);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
q($P){global$g;return$g->quote($P);}function
get_vals($H,$e=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$I=$h->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$k="<p class='error'>"){global$g;$Na=(is_object($h)?$h:$g);$J=array();$I=$Na->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$J;}function
unique_array($K,$s){foreach($s
as$r){if(ereg("PRIMARY|UNIQUE",$r["type"])){$J=array();foreach($r["columns"]as$u){if(!isset($K[$u]))continue
2;$J[$u]=$K[$u];}return$J;}}}function
where($X,$m=array()){global$t;$J=array();$Rb='(^[\w\(]+'.str_replace("_",".*",preg_quote(idf_escape("_"))).'\)+$)';foreach((array)$X["where"]as$u=>$V){$u=bracket_escape($u,1);$e=(preg_match($Rb,$u)?$u:idf_escape($u));$J[]=$e.(($t=="sql"&&ereg('^[0-9]*\\.[0-9]*$',$V))||$t=="mssql"?" LIKE ".q(addcslashes($V,"%_\\")):" = ".unconvert_field($m[$u],q($V)));if($t=="sql"&&ereg("[^ -@]",$V))$J[]="$e = ".q($V)." COLLATE utf8_bin";}foreach((array)$X["null"]as$u)$J[]=(preg_match($Rb,$u)?$u:idf_escape($u))." IS NULL";return
implode(" AND ",$J);}function
where_check($V,$m=array()){parse_str($V,$Aa);remove_slashes(array(&$Aa));return
where($Aa,$m);}function
where_link($p,$e,$W,$Pc="="){return"&where%5B$p%5D%5Bcol%5D=".urlencode($e)."&where%5B$p%5D%5Bop%5D=".urlencode(($W!==null?$Pc:"IS NULL"))."&where%5B$p%5D%5Bval%5D=".urlencode($W);}function
convert_fields($f,$m,$M=array()){$J="";foreach($f
as$u=>$V){if($M&&!in_array(idf_escape($u),$M))continue;$ma=convert_field($m[$u]);if($ma)$J.=", $ma AS ".idf_escape($u);}return$J;}function
cookie($B,$W){global$aa;$Wc=array($B,(ereg("\n",$W)?"":$W),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Wc[]=true;return
call_user_func_array('setcookie',$Wc);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($u){return$_SESSION[$u][DRIVER][SERVER][$_GET["username"]];}function
set_session($u,$V){$_SESSION[$u][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($eb,$N,$T,$i=null){global$fb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($fb))."|username|".($i!==null?"db|":"").session_name()),$y);return"$y[1]?".(sid()?SID."&":"").($eb!="server"||$N!=""?urlencode($eb)."=".urlencode($N)."&":"")."username=".urlencode($T).($i!=""?"&db=".urlencode($i):"").($y[2]?"&$y[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($x,$_=null){if($_!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($x!==null?$x:$_SERVER["REQUEST_URI"]))][]=$_;}if($x!==null){if($x=="")$x=".";header("Location: $x");exit;}}function
query_redirect($H,$x,$_,$kd=true,$xb=true,$_b=false){global$g,$k,$b;$Qd="";if($xb){$Bd=microtime();$_b=!$g->query($H);$Qd="; -- ".format_time($Bd,microtime());}$Ad="";if($H)$Ad=$b->messageQuery($H.$Qd);if($_b){$k=error().$Ad;return
false;}if($kd)redirect($x,$_.$Ad);return
true;}function
queries($H=null){global$g;static$hd=array();if($H===null)return
implode("\n",$hd);$Bd=microtime();$J=$g->query($H);$hd[]=(ereg(';$',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H)."; -- ".format_time($Bd,microtime());return$J;}function
apply_queries($H,$Ld,$tb='table'){foreach($Ld
as$R){if(!queries("$H ".$tb($R)))return
false;}return
true;}function
queries_redirect($x,$_,$kd){return
query_redirect(queries(),$x,$_,$kd,false,!$kd);}function
format_time($Bd,$pb){return
sprintf('%.3f s',max(0,array_sum(explode(" ",$pb))-array_sum(explode(" ",$Bd))));}function
remove_from_uri($Vc=""){return
substr(preg_replace("~(?<=[?&])($Vc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Ta){return" ".($E==$Ta?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E":"")).'">'.($E+1)."</a>");}function
get_file($u,$Wa=false){$Cb=$_FILES[$u];if(!$Cb)return
null;foreach($Cb
as$u=>$V)$Cb[$u]=(array)$V;$J='';foreach($Cb["error"]as$u=>$k){if($k)return$k;$B=$Cb["name"][$u];$Vd=$Cb["tmp_name"][$u];$Oa=file_get_contents($Wa&&ereg('\\.gz$',$B)?"compress.zlib://$Vd":$Vd);if($Wa){$Bd=substr($Oa,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Bd,$ld))$Oa=iconv("utf-16","utf-8",$Oa);elseif($Bd=="\xEF\xBB\xBF")$Oa=substr($Oa,3);}$J.=$Oa."\n\n";}return$J;}function
upload_error($k){$_c=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Unable to upload a file.'.($_c?" ".sprintf('Maximum allowed file size is %sB.',$_c):""):'File does not exist.');}function
repeat_pattern($G,$uc){return
str_repeat("$G{0,65535}",$uc/65535)."$G{0,".($uc%65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($P,$uc=80,$Hd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$uc).")($)?)u",$P,$y))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$uc).")($)?)",$P,$y);return
h($y[1]).$Hd.(isset($y[2])?"":"<i>...</i>");}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($ed,$gc=array()){while(list($u,$V)=each($ed)){if(is_array($V)){foreach($V
as$mc=>$U)$ed[$u."[$mc]"]=$U;}elseif(!in_array($u,$gc))echo'<input type="hidden" name="'.h($u).'" value="'.h($V).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Ab=false){$J=table_status($R,$Ab);return($J?$J:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$J=array();foreach($b->foreignKeys($R)as$Lb){foreach($Lb["source"]as$V)$J[$V][]=$Lb;}return$J;}function
enum_input($ae,$c,$l,$W,$ob=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$z);$J=($ob!==null?"<label><input type='$ae'$c value='$ob'".((is_array($W)?in_array($ob,$W):$W===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($z[1]as$p=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ba=(is_int($W)?$W==$p+1:(is_array($W)?in_array($p+1,$W):$W===$V));$J.=" <label><input type='$ae'$c value='".($p+1)."'".($Ba?' checked':'').'>'.h($b->editVal($V,$l)).'</label>';}return$J;}function
input($l,$W,$o){global$g,$ce,$b,$t;$B=h(bracket_escape($l["field"]));echo"<td class='function'>";$od=($t=="mssql"&&$l["auto_increment"]);if($od&&!$_POST["save"])$o=null;$Sb=(isset($_GET["select"])||$od?array("orig"=>'original'):array())+$b->editFunctions($l);$c=" name='fields[$B]'";if($l["type"]=="enum")echo
nbsp($Sb[""])."<td>".$b->editInput($_GET["edit"],$l,$c,$W);else{$Gb=0;foreach($Sb
as$u=>$V){if($u===""||!$V)break;$Gb++;}$Mc=($Gb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($Gb > f.selectedIndex) f.selectedIndex = $Gb;\"":"");$c.=$Mc;echo(count($Sb)>1?html_select("function[$B]",$Sb,$o===null||in_array($o,$Sb)||isset($Sb[$o])?$o:"","functionChange(this);"):nbsp(reset($Sb))).'<td>';$kc=$b->editInput($_GET["edit"],$l,$c,$W);if($kc!="")echo$kc;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$z);foreach($z[1]as$p=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ba=(is_int($W)?($W>>$p)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$B][$p]' value='".(1<<$p)."'".($Ba?' checked':'')."$Mc>".h($b->editVal($V,$l)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$B'$Mc>";elseif(($Nd=ereg('text|lob',$l["type"]))||ereg("\n",$W)){if($Nd&&$t!="sqlite")$c.=" cols='50' rows='12'";else{$L=min(12,substr_count($W,"\n")+1);$c.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$c>".h($W).'</textarea>';}else{$Bc=(!ereg('int',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$y)?((ereg("binary",$l["type"])?2:1)*$y[1]+($y[3]?1:0)+($y[2]&&!$l["unsigned"]?1:0)):($ce[$l["type"]]?$ce[$l["type"]]+($l["unsigned"]?0:1):0));if($t=='sql'&&$g->server_info>=5.6&&ereg('time',$l["type"]))$Bc+=7;echo"<input".(ereg('int',$l["type"])?" type='number'":"")." value='".h($W)."'".($Bc?" maxlength='$Bc'":"").(ereg('char|binary',$l["type"])&&$Bc>20?" size='40'":"")."$c>";}}}function
process_input($l){global$b;$ec=bracket_escape($l["field"]);$o=$_POST["function"][$ec];$W=$_POST["fields"][$ec];if($l["type"]=="enum"){if($W==-1)return
false;if($W=="")return"NULL";return+$W;}if($l["auto_increment"]&&$W=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$W);if(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads")){$Cb=get_file("fields-$ec");if(!is_string($Cb))return
false;return
q($Cb);}return$b->processInput($l,$W,$o);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Ob=false;foreach(table_status('',true)as$R=>$S){$B=$b->tableName($S);if(isset($S["Engine"])&&$B!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$I||$I->fetch_row()){if(!$Ob){echo"<ul>\n";$Ob=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$B</a>\n":"$B: <span class='error'>".error()."</span>\n");}}}echo($Ob?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($dc,$Ec=false){global$b;$J=$b->dumpHeaders($dc,$Ec);$Uc=$_POST["output"];if($Uc!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($dc).".$J".($Uc!="file"&&!ereg('[^0-9a-z]',$Uc)?".$Uc":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$u=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V==="")$K[$u]='"'.str_replace('"','""',$V).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($o,$e){return($o?($o=="unixepoch"?"DATETIME($e, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$e)"):$e);}function
password_file($Qa){$cb=ini_get("upload_tmp_dir");if(!$cb){if(function_exists('sys_get_temp_dir'))$cb=sys_get_temp_dir();else{$Db=@tempnam("","");if(!$Db)return
false;$cb=dirname($Db);unlink($Db);}}$Db="$cb/adminer.key";$J=@file_get_contents($Db);if($J||!$Qa)return$J;$Pb=@fopen($Db,"w");if($Pb){$J=md5(uniqid(mt_rand(),true));fwrite($Pb,$J);fclose($Pb);}return$J;}function
is_mail($lb){$na='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$db='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$G="$na+(\\.$na+)*@($db?\\.)+$db";return
preg_match("(^$G(,\\s*$G)*\$)i",$lb);}function
is_url($P){$db='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($db?\\.)+$db(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$y)?strtolower($y[1]):"");}function
is_shortable($l){return
ereg('char|text|lob|geometry|point|linestring|polygon',$l["type"]);}function
slow_query($H){global$b,$Wd;$i=$b->database();if(support("kill")&&is_object($h=connect())&&($i==""||$h->select_db($i))){$oc=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$Wd,'&kill=',$oc,'\');
}, ',1000*$b->queryTimeout(),');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
lzw_decompress($wa){$bb=256;$xa=8;$Fa=array();$pd=0;$qd=0;for($p=0;$p<strlen($wa);$p++){$pd=($pd<<8)+ord($wa[$p]);$qd+=8;if($qd>=$xa){$qd-=$xa;$Fa[]=$pd>>$qd;$pd&=(1<<$qd)-1;$bb++;if($bb>>$xa)$xa++;}}$ab=range("\0","\xFF");$J="";foreach($Fa
as$p=>$Ea){$kb=$ab[$Ea];if(!isset($kb))$kb=$te.$te[0];$J.=$kb;if($p)$ab[]=$te.$kb[0];$te=$kb;}return$J;}global$b,$g,$fb,$ib,$rb,$k,$Sb,$Vb,$aa,$jc,$t,$ba,$qc,$Lc,$Yc,$Ed,$Wd,$Zd,$ce,$je,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Wc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Wc[]=true;call_user_func_array('session_set_cookie_params',$Wc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Fb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($Yd,$Ic=null){if(is_array($Yd)){$ad=($Ic==1?0:1);$Yd=$Yd[$ad];}$Yd=str_replace("%d","%s",$Yd);$Ic=number_format($Ic,0,".",',');return
sprintf($Yd,$Ic);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$ad=array_search("SQL",$b->operators);if($ad!==false)unset($b->operators[$ad]);}function
dsn($gb,$T,$F,$wb='auth_error'){set_exception_handler($wb);parent::__construct($gb,$T,$F);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$de=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$l=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$fb=array();$fb=array("server"=>"MySQL")+$fb;if(!defined("DRIVER")){$bd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$T,$F){mysqli_report(MYSQLI_REPORT_OFF);list($bc,$Zc)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$bc:ini_get("mysqli.default_host")),($N.$T!=""?$T:ini_get("mysqli.default_user")),($N.$T.$F!=""?$F:ini_get("mysqli.default_pw")),null,(is_numeric($Zc)?$Zc:ini_get("mysqli.default_port")),(!is_numeric($Zc)?$Zc:null));if($J){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$J;}function
result($H,$l=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$l];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$T,$F){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$T"!=""?$T:ini_get("mysql.default_user")),("$N$T$F"!=""?$F:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($Ua){return
mysql_select_db($Ua,$this->_link);}function
query($H,$de=false){$I=@($de?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$l=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$T,$F){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$T,$F);$this->query("SET NAMES utf8");return
true;}function
select_db($Ua){return$this->query("USE ".idf_escape($Ua));}function
query($H,$de=false){$this->setAttribute(1000,!$de);return
parent::query($H,$de);}}}function
idf_escape($ec){return"`".str_replace("`","``",$ec)."`";}function
table($ec){return
idf_escape($ec);}function
connect(){global$b;$g=new
Min_DB;$Sa=$b->credentials();if($g->connect($Sa[0],$Sa[1],$Sa[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($sd=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$sd;return$J;}function
get_databases($Hb){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Hb?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$X,$v,$Jc=0,$xd=" "){return" $H$X".($v!==null?$xd."LIMIT $v".($Jc?" OFFSET $Jc":""):"");}function
limit1($H,$X){return
limit($H,$X,1);}function
db_collation($i,$Ia){global$g;$J=null;$Qa=$g->result("SHOW CREATE DATABASE ".idf_escape($i),1);if(preg_match('~ COLLATE ([^ ]+)~',$Qa,$y))$J=$y[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Qa,$y))$J=$Ia[$y[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(ereg("YES|DEFAULT",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($Va){$J=array();foreach($Va
as$i)$J[$i]=count(get_vals("SHOW TABLES IN ".idf_escape($i)));return$J;}function
table_status($B="",$Ab=false){global$g;$J=array();foreach(get_rows($Ab&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($B!=""?"AND TABLE_NAME = ".q($B):"ORDER BY Name"):"SHOW TABLE STATUS".($B!=""?" LIKE ".q(addcslashes($B,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($B!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){return
eregi("InnoDB|IBMDB2I",$S["Engine"]);}function
fields($R){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$y);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$y[1],"length"=>$y[2],"unsigned"=>ltrim($y[3].$y[4]),"default"=>($K["Default"]!=""||ereg("char|set",$y[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$K["Extra"],$y)?$y[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(explode(",",$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];$J[$K["Key_name"]]["descs"][]=null;}return$J;}function
foreign_keys($R){global$g,$Lc;static$G='`(?:[^`]|``)+`';$J=array();$Ra=$g->result("SHOW CREATE TABLE ".table($R),1);if($Ra){preg_match_all("~CONSTRAINT ($G) FOREIGN KEY \\(((?:$G,? ?)+)\\) REFERENCES ($G)(?:\\.($G))? \\(((?:$G,? ?)+)\\)(?: ON DELETE ($Lc))?(?: ON UPDATE ($Lc))?~",$Ra,$z,PREG_SET_ORDER);foreach($z
as$y){preg_match_all("~$G~",$y[2],$_d);preg_match_all("~$G~",$y[5],$Md);$J[idf_unescape($y[1])]=array("db"=>idf_unescape($y[4]!=""?$y[3]:$y[4]),"table"=>idf_unescape($y[4]!=""?$y[4]:$y[3]),"source"=>array_map('idf_unescape',$_d[0]),"target"=>array_map('idf_unescape',$Md[0]),"on_delete"=>($y[6]?$y[6]:"RESTRICT"),"on_update"=>($y[7]?$y[7]:"RESTRICT"),);}}return$J;}function
view($B){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($B),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$u=>$V)asort($J[$u]);return$J;}function
information_schema($i){global$g;return($g->server_info>=5&&$i=="information_schema")||($g->server_info>=5.5&&$i=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(ereg(' at line ([0-9]+)$',$g->error,$ld))return$ld[1]-1;}function
create_database($i,$Ha){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($i).($Ha?" COLLATE ".q($Ha):""));}function
drop_databases($Va){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$Va,'idf_escape');}function
rename_database($B,$Ha){if(create_database($B,$Ha)){$md=array();foreach(tables_list()as$R=>$ae)$md[]=table($R)." TO ".idf_escape($B).".".table($R);if(!$md||queries("RENAME TABLE ".implode(", ",$md))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$qa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$r){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$r["columns"],true)){$qa="";break;}if($r["type"]=="PRIMARY")$qa=" UNIQUE";}}return" AUTO_INCREMENT$qa";}function
alter_table($R,$B,$m,$Ib,$La,$qb,$Ha,$pa,$Xc){$la=array();foreach($m
as$l)$la[]=($l[1]?($R!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($R!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$la=array_merge($la,$Ib);$Cd="COMMENT=".q($La).($qb?" ENGINE=".q($qb):"").($Ha?" COLLATE ".q($Ha):"").($pa!=""?" AUTO_INCREMENT=$pa":"").$Xc;if($R=="")return
queries("CREATE TABLE ".table($B)." (\n".implode(",\n",$la)."\n) $Cd");if($R!=$B)$la[]="RENAME TO ".table($B);$la[]=$Cd;return
queries("ALTER TABLE ".table($R)."\n".implode(",\n",$la));}function
alter_indexes($R,$la){foreach($la
as$u=>$V)$la[$u]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"").$V[2]);return
queries("ALTER TABLE ".table($R).implode(",",$la));}function
truncate_tables($Ld){return
apply_queries("TRUNCATE TABLE",$Ld);}function
drop_views($oe){return
queries("DROP VIEW ".implode(", ",array_map('table',$oe)));}function
drop_tables($Ld){return
queries("DROP TABLE ".implode(", ",array_map('table',$Ld)));}function
move_tables($Ld,$oe,$Md){$md=array();foreach(array_merge($Ld,$oe)as$R)$md[]=table($R)." TO ".idf_escape($Md).".".table($R);return
queries("RENAME TABLE ".implode(", ",$md));}function
copy_tables($Ld,$oe,$Md){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Ld
as$R){$B=($Md==DB?table("copy_$R"):idf_escape($Md).".".table($R));if(!queries("DROP TABLE IF EXISTS $B")||!queries("CREATE TABLE $B LIKE ".table($R))||!queries("INSERT INTO $B SELECT * FROM ".table($R)))return
false;}foreach($oe
as$R){$B=($Md==DB?table("copy_$R"):idf_escape($Md).".".table($R));$ne=view($R);if(!queries("DROP VIEW IF EXISTS $B")||!queries("CREATE VIEW $B AS $ne[select]"))return
false;}return
true;}function
trigger($B){if($B=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($B));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($B,$ae){global$g,$rb,$jc,$ce;$ka=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$be="((".implode("|",array_merge(array_keys($ce),$ka)).")\\b(?:\\s*\\(((?:[^'\")]*|$rb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$G="\\s*(".($ae=="FUNCTION"?"":$jc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$be";$Qa=$g->result("SHOW CREATE $ae ".idf_escape($B),2);preg_match("~\\(((?:$G\\s*,?)*)\\)\\s*".($ae=="FUNCTION"?"RETURNS\\s+$be\\s+":"")."(.*)~is",$Qa,$y);$m=array();preg_match_all("~$G\\s*,?~is",$y[1],$z,PREG_SET_ORDER);foreach($z
as$Vc){$B=str_replace("``","`",$Vc[2]).$Vc[3];$m[]=array("field"=>$B,"type"=>strtolower($Vc[5]),"length"=>preg_replace_callback("~$rb~s",'normalize_enum',$Vc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Vc[8] $Vc[7]"))),"null"=>1,"full_type"=>$Vc[4],"inout"=>strtoupper($Vc[1]),"collation"=>strtolower($Vc[9]),);}if($ae!="FUNCTION")return
array("fields"=>$m,"definition"=>$y[11]);return
array("fields"=>$m,"returns"=>array("type"=>$y[12],"length"=>$y[13],"unsigned"=>$y[15],"collation"=>$y[16]),"definition"=>$y[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($R,$O){return
queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")");}function
insert_update($R,$O,$cd){foreach($O
as$u=>$V)$O[$u]="$u = $V";$ke=implode(", ",$O);return
queries("INSERT INTO ".table($R)." SET $ke ON DUPLICATE KEY UPDATE $ke");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($S,$X){return($X||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($td){return
true;}function
create_sql($R,$pa){global$g;$J=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$pa)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($Ua){return"USE ".idf_escape($Ua);}function
trigger_sql($R,$Fd){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$K)$J.="\n".($Fd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(ereg("binary",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if($l["type"]=="bit")return"BIN(".idf_escape($l["field"])." + 0)";if(ereg("geometry|point|linestring|polygon",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$J){if(ereg("binary",$l["type"]))$J="UNHEX($J)";if($l["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(ereg("geometry|point|linestring|polygon",$l["type"]))$J="GeomFromText($J)";return$J;}function
support($Bb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$Bb);}$t="sql";$ce=array();$Ed=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$u=>$V){$ce+=$V;$Ed[$u]=array_keys($V);}$je=array("unsigned","zerofill","unsigned zerofill");$Qc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Sb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Vb=array("avg","count","count distinct","group_concat","max","min","sum");$ib=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="3.7.1";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".'Editor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin($Qa=false){return
password_file($Qa);}function
database(){global$g;if($g){$Va=$this->databases(false);return(!$Va?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$Va[(information_schema($Va[0])?1:0)]);}}function
databases($Hb=true){return
get_databases($Hb);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Username<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($wc,$F){global$g;$g->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Jd){return
h($Jd["Comment"]!=""?$Jd["Comment"]:$Jd["Name"]);}function
fieldName($l,$C=0){return
h($l["comment"]!=""?$l["comment"]:$l["field"]);}function
selectLinks($Jd,$O=""){$a=$Jd["Name"];if($O!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$O).'">'.'New item'."</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Id){$J=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$K)$J[$K["TABLE_NAME"]]["keys"][$K["CONSTRAINT_NAME"]][$K["COLUMN_NAME"]]=$K["REFERENCED_COLUMN_NAME"];foreach($J
as$u=>$V){$B=$this->tableName(table_status($u,true));if($B!=""){$ud=preg_quote($Id);$xd="(:|\\s*-)?\\s+";$J[$u]["name"]=(preg_match("(^$ud$xd(.+)|^(.+?)$xd$ud\$)iu",$B,$y)?$y[2].$y[3]:$B);}else
unset($J[$u]);}return$J;}function
backwardKeysPrint($ta,$K){foreach($ta
as$R=>$sa){foreach($sa["keys"]as$Ja){$w=ME.'select='.urlencode($R);$p=0;foreach($Ja
as$e=>$V)$w.=where_link($p++,$e,$K[$V]);echo"<a href='".h($w)."'>".h($sa["name"])."</a>";$w=ME.'edit='.urlencode($R);foreach($Ja
as$e=>$V)$w.="&set".urlencode("[".bracket_escape($e)."]")."=".urlencode($K[$V]);echo"<a href='".h($w)."' title='".'New item'."'>+</a> ";}}}function
selectQuery($H){return"<!--\n".str_replace("--","--><!-- ",$H)."\n-->\n";}function
rowDescription($R){foreach(fields($R)as$l){if(ereg("varchar|character varying",$l["type"]))return
idf_escape($l["field"]);}return"";}function
rowDescriptions($L,$Kb){$J=$L;foreach($L[0]as$u=>$V){if(list($R,$q,$B)=$this->_foreignColumn($Kb,$u)){$fc=array();foreach($L
as$K)$fc[$K[$u]]=q($K[$u]);$Za=$this->_values[$R];if(!$Za)$Za=get_key_vals("SELECT $q, $B FROM ".table($R)." WHERE $q IN (".implode(", ",$fc).")");foreach($L
as$A=>$K){if(isset($K[$u]))$J[$A][$u]=(string)$Za[$K[$u]];}}}return$J;}function
selectLink($V,$l){}function
selectVal($V,$w,$l){$J=($V===null?"&nbsp;":$V);$w=h($w);if(ereg('blob|bytea',$l["type"])&&!is_utf8($V)){$J=lang(array('%d byte','%d bytes'),strlen($V));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$V))$J="<img src='$w' alt='$J'>";}if(like_bool($l)&&$J!="&nbsp;")$J=($V?'yes':'no');if($w)$J="<a href='$w'>$J</a>";if(!$w&&!like_bool($l)&&ereg('int|float|double|decimal',$l["type"]))$J="<div class='number'>$J</div>";elseif(ereg('date',$l["type"]))$J="<div class='datetime'>$J</div>";return$J;}function
editVal($V,$l){if(ereg('date|timestamp',$l["type"])&&$V!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$1-$3-$5',$V);return$V;}function
selectColumnsPrint($M,$f){}function
selectSearchPrint($X,$f,$s){$X=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Search'."</legend><div>\n";$nc=array();foreach($X
as$u=>$V)$nc[$V["col"]]=$u;$p=0;$m=fields($_GET["select"]);foreach($f
as$B=>$Ya){$l=$m[$B];if(ereg("enum",$l["type"])||like_bool($l)){$u=$nc[$B];$p--;echo"<div>".h($Ya)."<input type='hidden' name='where[$p][col]' value='".h($B)."'>:",(like_bool($l)?" <select name='where[$p][val]'>".optionlist(array(""=>"",'no','yes'),$X[$u]["val"],true)."</select>":enum_input("checkbox"," name='where[$p][val][]'",$l,(array)$X[$u]["val"],($l["null"]?0:null))),"</div>\n";unset($f[$B]);}elseif(is_array($Rc=$this->_foreignKeyOptions($_GET["select"],$B))){if($m[$B]["null"])$Rc[0]='('.'empty'.')';$u=$nc[$B];$p--;echo"<div>".h($Ya)."<input type='hidden' name='where[$p][col]' value='".h($B)."'><input type='hidden' name='where[$p][op]' value='='>: <select name='where[$p][val]'>".optionlist($Rc,$X[$u]["val"],true)."</select></div>\n";unset($f[$B]);}}$p=0;foreach($X
as$V){if(($V["col"]==""||$f[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$p][col]'><option value=''>(".'anywhere'.")".optionlist($f,$V["col"],true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators,$V["op"]),"<input type='search' name='where[$p][val]' value='".h($V["val"])."' onsearch='selectSearchSearch(this);'></div>\n";$p++;}}echo"<div><select name='where[$p][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'anywhere'.")".optionlist($f,null,true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$p][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($C,$f,$s){$Tc=array();foreach($s
as$u=>$r){$C=array();foreach($r["columns"]as$V)$C[]=$f[$V];if(count(array_filter($C,'strlen'))>1&&$u!="PRIMARY")$Tc[$u]=implode(", ",$C);}if($Tc){echo'<fieldset><legend>'.'Sort'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Tc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($v){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","50","100"),$v),"</div></fieldset>\n";}function
selectLengthPrint($Od){}function
selectActionPrint($s){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($mb,$f){if($mb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'From'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Subject'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$f,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Insert'."'>\n";echo"<p>".'Attachments'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($mb)==1?'<input type="hidden" name="email_field" value="'.h(key($mb)).'">':html_select("email_field",$mb)),"<input type='submit' name='email' value='".'Send'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($f,$s){return
array(array(),array());}function
selectSearchProcess($m,$s){$J=array();foreach((array)$_GET["where"]as$u=>$X){$Ga=$X["col"];$Oc=$X["op"];$V=$X["val"];if(($u<0?"":$Ga).$V!=""){$Ma=array();foreach(($Ga!=""?array($Ga=>$m[$Ga]):$m)as$B=>$l){if($Ga!=""||is_numeric($V)||!ereg('int|float|double|decimal',$l["type"])){$B=idf_escape($B);if($Ga!=""&&$l["type"]=="enum")$Ma[]=(in_array(0,$V)?"$B IS NULL OR ":"")."$B IN (".implode(", ",array_map('intval',$V)).")";else{$Pd=ereg('char|text|enum|set',$l["type"]);$W=$this->processInput($l,(!$Oc&&$Pd&&ereg('^[^%]+$',$V)?"%$V%":$V));$Ma[]=$B.($W=="NULL"?" IS".($Oc==">="?" NOT":"")." $W":(in_array($Oc,$this->operators)||$Oc=="="?" $Oc $W":($Pd?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($u<0&&$V=="0")$Ma[]="$B IS NULL";}}}$J[]=($Ma?"(".implode(" OR ",$Ma).")":"0");}}return$J;}function
selectOrderProcess($m,$s){$hc=$_GET["index_order"];if($hc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($hc!=""?array($s[$hc]):$s)as$r){if($hc!=""||$r["type"]=="INDEX"){$Xb=array_filter($r["descs"]);$Ya=false;foreach($r["columns"]as$V){if(ereg('date|timestamp',$m[$V]["type"])){$Ya=true;break;}}$J=array();foreach($r["columns"]as$u=>$V)$J[]=idf_escape($V).(($Xb?$r["descs"][$u]:$Ya)?" DESC":"");return$J;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($X,$Kb){if($_POST["email_append"])return
true;if($_POST["email"]){$wd=0;if($_POST["all"]||$_POST["check"]){$l=idf_escape($_POST["email_field"]);$Gd=$_POST["email_subject"];$_=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Gd.$_",$z);$L=get_rows("SELECT DISTINCT $l".($z[1]?", ".implode(", ",array_map('idf_escape',array_unique($z[1]))):"")." FROM ".table($_GET["select"])." WHERE $l IS NOT NULL AND $l != ''".($X?" AND ".implode(" AND ",$X):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$m=fields($_GET["select"]);foreach($this->rowDescriptions($L,$Kb)as$K){$nd=array('{\\'=>'{');foreach($z[1]as$V)$nd['{$'."$V}"]=$this->editVal($K[$V],$m[$V]);$lb=$K[$_POST["email_field"]];if(is_mail($lb)&&send_mail($lb,strtr($Gd,$nd),strtr($_,$nd),$_POST["email_from"],$_FILES["email_files"]))$wd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('%d e-mail has been sent.','%d e-mails have been sent.'),$wd));}return
false;}function
selectQueryBuild($M,$X,$Tb,$C,$v,$E){return"";}function
messageQuery($H){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$H)."\n-->";}function
editFunctions($l){$J=array();if($l["null"]&&ereg('blob',$l["type"]))$J["NULL"]='empty';$J[""]=($l["null"]||$l["auto_increment"]||like_bool($l)?"":"*");if(ereg('date|time',$l["type"]))$J["now"]='now';if(eregi('_(md5|sha1)$',$l["field"],$y))$J[]=strtolower($y[1]);return$J;}function
editInput($R,$l,$c,$W){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'original'."</i></label> ":"").enum_input("radio",$c,$l,($W||isset($_GET["select"])?$W:0),($l["null"]?"":null));$Rc=$this->_foreignKeyOptions($R,$l["field"],$W);if($Rc!==null)return(is_array($Rc)?"<select$c>".optionlist($Rc,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($Rc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($l["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($l))return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";$ac="";if(ereg('time',$l["type"]))$ac='HH:MM:SS';if(ereg('date|timestamp',$l["type"]))$ac='[yyyy]-mm-dd'.($ac?" [$ac]":"");if($ac)return"<input value='".h($W)."'$c> ($ac)";if(eregi('_(md5|sha1)$',$l["field"]))return"<input type='password' value='".h($W)."'$c>";return'';}function
processInput($l,$W,$o=""){if($o=="now")return"$o()";$J=$W;if(ereg('date|timestamp',$l["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$1-$3-$5'))).'(.*))',$W,$y))$J=($y["p1"]!=""?$y["p1"]:($y["p2"]!=""?($y["p2"]<70?20:19).$y["p2"]:gmdate("Y")))."-$y[p3]$y[p4]-$y[p5]$y[p6]".end($y);$J=($l["type"]=="bit"&&ereg('^[0-9]+$',$W)?$J:q($J));if($W==""&&like_bool($l))$J="0";elseif($W==""&&($l["null"]||!ereg('char|text',$l["type"])))$J="NULL";elseif(ereg('^(md5|sha1)$',$o))$J="$o($J)";return
unconvert_field($l,$J);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($i){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$Fd,$H){global$g;$I=$g->query($H,1);if($I){while($K=$I->fetch_assoc()){if($Fd=="table"){dump_csv(array_keys($K));$Fd="INSERT";}dump_csv($K);}}}function
dumpFilename($dc){return
friendly_url($dc);}function
dumpHeaders($dc,$Ec=false){$yb="csv";header("Content-Type: text/csv; charset=utf-8");return$yb;}function
homepage(){return
true;}function
navigation($Dc){global$ca,$Wd;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Dc=="auth"){$Gb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$T=>$F){if($F!==null){if($Gb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Gb=false;}echo"<a href='".h(auth_url("server","",$T))."'>".($T!=""?h($T):"<i>".'empty'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$Wd,'">
</p>
</form>
';$this->databasesPrint($Dc);if($Dc!="db"&&$Dc!="ns"){$S=table_status('',true);if(!$S)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($Dc){}function
tablesPrint($Ld){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($Ld
as$K){$B=$this->tableName($K);if(isset($K["Engine"])&&$B!="")echo"<a href='".h(ME).'select='.urlencode($K["Name"])."'".bold($_GET["select"]==$K["Name"]||$_GET["edit"]==$K["Name"])." title='".'Select data'."'>$B</a><br>\n";}}function
_foreignColumn($Kb,$e){foreach((array)$Kb[$e]as$Jb){if(count($Jb["source"])==1){$B=$this->rowDescription($Jb["table"]);if($B!=""){$q=idf_escape($Jb["target"][0]);return
array($Jb["table"],$q,$B);}}}}function
_foreignKeyOptions($R,$e,$W=null){global$g;if(list($Md,$q,$B)=$this->_foreignColumn(column_foreign_keys($R),$e)){$J=&$this->_values[$Md];if($J===null){$S=table_status($Md);$J=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $q, $B FROM ".table($Md)." ORDER BY 2"));}if(!$J&&$W!==null)return$g->result("SELECT $B FROM ".table($Md)." WHERE $q = ".q($W));return$J;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Rd,$k="",$_a=array(),$Sd=""){global$ba,$b,$g,$fb;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Td=$Rd.($Sd!=""?": ".h($Sd):"");$Ud=strip_tags($Td.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Ud,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.7.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.7.1",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.7.1",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.7.1",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($_a!==null){$w=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($w?$w:".").'">'.$fb[DRIVER].'</a> &raquo; ';$w=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):'Server');if($_a===false)echo"$N\n";else{echo"<a href='".($w?h($w):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($_a)))echo'<a href="'.h($w."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($_a)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($_a
as$u=>$V){$Ya=(is_array($V)?$V[1]:$V);if($Ya!="")echo'<a href="'.h(ME."$u=").urlencode(is_array($V)?$V[0]:$V).'">'.h($Ya).'</a> &raquo; ';}}echo"$Rd\n";}}echo"<h2>$Td</h2>\n";restart_session();$le=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Cc=$_SESSION["messages"][$le];if($Cc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Cc)."</div>\n";unset($_SESSION["messages"][$le]);}$Va=&get_session("dbs");if(DB!=""&&$Va&&!in_array(DB,$Va,true))$Va=null;stop_session();if($k)echo"<div class='error'>$k</div>\n";define("PAGE_HEADER",1);}function
page_footer($Dc=""){global$b;echo'</div>

<div id="menu">
';$b->navigation($Dc);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($A){while($A>=2147483648)$A-=4294967296;while($A<=-2147483649)$A+=4294967296;return(int)$A;}function
long2str($U,$qe){$sd='';foreach($U
as$V)$sd.=pack('V',$V);if($qe)return
substr($sd,0,end($U));return$sd;}function
str2long($sd,$qe){$U=array_values(unpack('V*',str_pad($sd,4*ceil(strlen($sd)/4),"\0")));if($qe)$U[]=strlen($sd);return$U;}function
xxtea_mx($Z,$Y,$Q,$mc){return
int32((($Z>>5&0x7FFFFFF)^$Y<<2)+(($Y>>3&0x1FFFFFFF)^$Z<<4))^int32(($Q^$Y)+($mc^$Z));}function
encrypt_string($Dd,$u){if($Dd=="")return"";$u=array_values(unpack("V*",pack("H*",md5($u))));$U=str2long($Dd,true);$A=count($U)-1;$Z=$U[$A];$Y=$U[0];$gd=floor(6+52/($A+1));$Q=0;while($gd-->0){$Q=int32($Q+0x9E3779B9);$hb=$Q>>2&3;for($D=0;$D<$A;$D++){$Y=$U[$D+1];$Fc=xxtea_mx($Z,$Y,$Q,$u[$D&3^$hb]);$Z=int32($U[$D]+$Fc);$U[$D]=$Z;}$Y=$U[0];$Fc=xxtea_mx($Z,$Y,$Q,$u[$D&3^$hb]);$Z=int32($U[$A]+$Fc);$U[$A]=$Z;}return
long2str($U,false);}function
decrypt_string($Dd,$u){if($Dd=="")return"";if(!$u)return
false;$u=array_values(unpack("V*",pack("H*",md5($u))));$U=str2long($Dd,false);$A=count($U)-1;$Z=$U[$A];$Y=$U[0];$gd=floor(6+52/($A+1));$Q=int32($gd*0x9E3779B9);while($Q){$hb=$Q>>2&3;for($D=$A;$D>0;$D--){$Z=$U[$D-1];$Fc=xxtea_mx($Z,$Y,$Q,$u[$D&3^$hb]);$Y=int32($U[$D]-$Fc);$U[$D]=$Y;}$Z=$U[$A];$Fc=xxtea_mx($Z,$Y,$Q,$u[$D&3^$hb]);$Y=int32($U[0]-$Fc);$U[0]=$Y;$Q=int32($Q-0x9E3779B9);}return
long2str($U,true);}$g='';$Wd=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$Yc=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($u)=explode(":",$V);$Yc[$u]=$V;}}$d=$_POST["auth"];if($d){session_regenerate_id();$_SESSION["pwds"][$d["driver"]][$d["server"]][$d["username"]]=$d["password"];$_SESSION["db"][$d["driver"]][$d["server"]][$d["username"]][$d["db"]]=true;if($d["permanent"]){$u=base64_encode($d["driver"])."-".base64_encode($d["server"])."-".base64_encode($d["username"])."-".base64_encode($d["db"]);$dd=$b->permanentLogin(true);$Yc[$u]="$u:".base64_encode($dd?encrypt_string($d["password"],$dd):"");cookie("adminer_permanent",implode(" ",$Yc));}if(count($_POST)==1||DRIVER!=$d["driver"]||SERVER!=$d["server"]||$_GET["username"]!==$d["username"]||DB!=$d["db"])redirect(auth_url($d["driver"],$d["server"],$d["username"],$d["db"]));}elseif($_POST["logout"]){if($Wd&&$_POST["token"]!=$Wd){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$u)set_session($u,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($Yc&&!$_SESSION["pwds"]){session_regenerate_id();$dd=$b->permanentLogin();foreach($Yc
as$u=>$V){list(,$Ca)=explode(":",$V);list($eb,$N,$T,$i)=array_map('base64_decode',explode("-",$u));$_SESSION["pwds"][$eb][$N][$T]=decrypt_string(base64_decode($Ca),$dd);$_SESSION["db"][$eb][$N][$T][$i]=true;}}function
unset_permanent(){global$Yc;foreach($Yc
as$u=>$V){list($eb,$N,$T,$i)=array_map('base64_decode',explode("-",$u));if($eb==DRIVER&&$N==SERVER&&$T==$_GET["username"]&&$i==DB)unset($Yc[$u]);}cookie("adminer_permanent",implode(" ",$Yc));}function
auth_error($vb=null){global$g,$b,$Wd;$zd=session_name();$k="";if(!$_COOKIE[$zd]&&$_GET[$zd]&&ini_bool("session.use_only_cookies"))$k='Session support must be enabled.';elseif(isset($_GET["username"])){if(($_COOKIE[$zd]||$_GET[$zd])&&!$Wd)$k='Session expired, please login again.';else{$F=&get_session("pwds");if($F!==null){$k=h($vb?$vb->getMessage():(is_string($g)?$g:'Invalid credentials.'));if($F===false)$k.='<br>'.sprintf('Master password expired. <a href="http://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');$F=null;}unset_permanent();}}page_header('Login',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$bd)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Wd=$_SESSION["token"];if($d&&$_POST["token"])$_POST["token"]=$Wd;$k='';if($_POST){if($_POST["token"]!=$Wd){$ic="max_input_vars";$Ac=ini_get($ic);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$u){$V=ini_get($u);if($V&&(!$Ac||$V<$Ac)){$ic=$u;$Ac=$V;}}}$k=(!$_POST["token"]&&$Ac?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$ic'"):'Invalid CSRF token. Send the form again.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$k=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$k.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}$g->select_db($b->database());function
email_header($Yb){return"=?UTF-8?B?".base64_encode($Yb)."?=";}function
send_mail($lb,$Gd,$_,$Qb="",$Eb=array()){$j=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$_=str_replace("\n",$j,wordwrap(str_replace("\r","","$_\n")));$za=uniqid("boundary");$oa="";foreach((array)$Eb["error"]as$u=>$V){if(!$V)$oa.="--$za$j"."Content-Type: ".str_replace("\n","",$Eb["type"][$u]).$j."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Eb["name"][$u])."\"$j"."Content-Transfer-Encoding: base64$j$j".chunk_split(base64_encode(file_get_contents($Eb["tmp_name"][$u])),76,$j).$j;}$va="";$Zb="Content-Type: text/plain; charset=utf-8$j"."Content-Transfer-Encoding: 8bit";if($oa){$oa.="--$za--$j";$va="--$za$j$Zb$j$j";$Zb="Content-Type: multipart/mixed; boundary=\"$za\"";}$Zb.=$j."MIME-Version: 1.0$j"."X-Mailer: Adminer Editor".($Qb?$j."From: ".str_replace("\n","",$Qb):"");return
mail($lb,email_header($Gd),$va.$_.$oa,$Zb);}function
like_bool($l){return
ereg("bool|(tinyint|bit)\\(1\\)",$l["full_type"]);}$Lc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$fb[DRIVER]='Login';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$m=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$m),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$m=fields($a);$X=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$m):""):where($_GET,$m));$ke=(isset($_GET["select"])?$_POST["edit"]:$X);foreach($m
as$B=>$l){if(!isset($l["privileges"][$ke?"update":"insert"])||$b->fieldName($l)=="")unset($m[$B]);}if($_POST&&!$k&&!isset($_GET["select"])){$x=$_POST["referer"];if($_POST["insert"])$x=($ke?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$x))$x=ME."select=".urlencode($a);$s=indexes($a);$fe=unique_array($_GET["where"],$s);$id="\nWHERE $X";if(isset($_POST["delete"])){$H="FROM ".table($a);query_redirect("DELETE".($fe?" $H$id":limit1($H,$id)),$x,'Item has been deleted.');}else{$O=array();foreach($m
as$B=>$l){$V=process_input($l);if($V!==false&&$V!==null)$O[idf_escape($B)]=($ke?"\n".idf_escape($B)." = $V":$V);}if($ke){if(!$O)redirect($x);$H=table($a)." SET".implode(",",$O);query_redirect("UPDATE".($fe?" $H$id":limit1($H,$id)),$x,'Item has been updated.');}else{$I=insert_into($a,$O);$sc=($I?last_id():0);queries_redirect($x,sprintf('Item%s has been inserted.',($sc?" $sc":"")),$I);}}}$Kd=$b->tableName(table_status1($a,true));page_header(($ke?'Edit':'Insert'),$k,array("select"=>array($a,$Kd)),$Kd);$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($X){$M=array();foreach($m
as$B=>$l){if(isset($l["privileges"]["select"])){$ma=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$ma="''";if($t=="sql"&&ereg("enum|set",$l["type"]))$ma="1*".idf_escape($B);$M[]=($ma?"$ma AS ":"").idf_escape($B);}}$K=array();if($M){$L=get_rows("SELECT".limit(implode(", ",$M)." FROM ".table($a)," WHERE $X",(isset($_GET["select"])?2:1)));$K=(isset($_GET["select"])&&count($L)!=1?null:reset($L));}}if($K===false)echo"<p class='error'>".'No rows.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$m)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$B=>$l){echo"<tr><th>".$b->fieldName($l);$Xa=$_GET["set"][bracket_escape($B)];if($Xa===null){$Xa=$l["default"];if($l["type"]=="bit"&&ereg("^b'([01]*)'\$",$Xa,$ld))$Xa=$ld[1];}$W=($K!==null?($K[$B]!=""&&$t=="sql"&&ereg("enum|set",$l["type"])?(is_array($K[$B])?array_sum($K[$B]):+$K[$B]):$K[$B]):(!$ke&&$l["auto_increment"]?"":(isset($_GET["select"])?false:$Xa)));if(!$_POST["save"]&&is_string($W))$W=$b->editVal($W,$l);$o=($_POST["save"]?(string)$_POST["function"][$B]:($ke&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:($W!==null?'':'NULL'))));if(ereg("time",$l["type"])&&$W=="CURRENT_TIMESTAMP"){$W="";$o="now";}input($l,$W,$o);echo"\n";}echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($ke?'Save and continue edit':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($ke?"<input type='submit' name='delete' value='".'Delete'."' onclick=\"return confirm('".'Are you sure?'."');\">\n":($_POST||!$m?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Wd,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$s=indexes($a);$m=fields($a);$Mb=column_foreign_keys($a);$Kc="";if($S["Oid"]){$Kc=($t=="sqlite"?"rowid":"oid");$s[]=array("type"=>"PRIMARY","columns"=>array($Kc));}parse_str($_COOKIE["adminer_import"],$ha);$rd=array();$f=array();$Od=null;foreach($m
as$u=>$l){$B=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$B!=""){$f[$u]=html_entity_decode(strip_tags($B),ENT_QUOTES);if(is_shortable($l))$Od=$b->selectLengthProcess();}$rd+=$l["privileges"];}list($M,$Tb)=$b->selectColumnsProcess($f,$s);$lc=count($Tb)<count($M);$X=$b->selectSearchProcess($m,$s);$C=$b->selectOrderProcess($m,$s);$v=$b->selectLimitProcess();$Qb=($M?implode(", ",$M):"*".($Kc?", $Kc":"")).convert_fields($f,$m,$M)."\nFROM ".table($a);$Ub=($Tb&&$lc?"\nGROUP BY ".implode(", ",$Tb):"").($C?"\nORDER BY ".implode(", ",$C):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$ge=>$K){$ma=convert_field($m[key($K)]);echo$g->result("SELECT".limit($ma?$ma:idf_escape(key($K))." FROM ".table($a)," WHERE ".where_check($ge,$m).($X?" AND ".implode(" AND ",$X):"").($C?" ORDER BY ".implode(", ",$C):""),1));}exit;}if($_POST&&!$k){$se=$X;if(is_array($_POST["check"]))$se[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$se=($se?"\nWHERE ".implode(" AND ",$se):"");$cd=$ie=null;foreach($s
as$r){if($r["type"]=="PRIMARY"){$cd=array_flip($r["columns"]);$ie=($M?$cd:array());break;}}foreach((array)$ie
as$u=>$V){if(in_array(idf_escape($u),$M))unset($ie[$u]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$ie===array())$H="SELECT $Qb$se$Ub";else{$ee=array();foreach($_POST["check"]as$V)$ee[]="(SELECT".limit($Qb,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V,$m).$Ub,1).")";$H=implode(" UNION ALL ",$ee);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($X,$Mb)){if($_POST["save"]||$_POST["delete"]){$I=true;$ia=0;$H=table($a);$O=array();if(!$_POST["delete"]){foreach($f
as$B=>$V){$V=process_input($m[$B]);if($V!==null){if($_POST["clone"])$O[idf_escape($B)]=($V!==false?$V:idf_escape($B));elseif($V!==false)$O[]=idf_escape($B)." = $V";}}$H.=($_POST["clone"]?" (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a):" SET\n".implode(",\n",$O));}if($_POST["delete"]||$O){$Ka="UPDATE";if($_POST["delete"]){$Ka="DELETE";$H="FROM $H";}if($_POST["clone"]){$Ka="INSERT";$H="INTO $H";}if($_POST["all"]||($ie===array()&&is_array($_POST["check"]))||$lc){$I=queries("$Ka $H$se");$ia=$g->affected_rows;}else{foreach((array)$_POST["check"]as$V){$I=queries($Ka.limit1($H,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V,$m)));if(!$I)break;$ia+=$g->affected_rows;}}}$_=lang(array('%d item has been affected.','%d items have been affected.'),$ia);if($_POST["clone"]&&$I&&$ia==1){$sc=last_id();if($sc)$_=sprintf('Item%s has been inserted.'," $sc");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$_,$I);}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Ctrl+click on a value to modify it.';else{$I=true;$ia=0;foreach($_POST["val"]as$ge=>$K){$O=array();foreach($K
as$u=>$V){$u=bracket_escape($u,1);$O[]=idf_escape($u)." = ".(ereg('char|text',$m[$u]["type"])||$V!=""?$b->processInput($m[$u],$V):"NULL");}$H=table($a)." SET ".implode(", ",$O);$re=" WHERE ".where_check($ge,$m).($X?" AND ".implode(" AND ",$X):"");$I=queries("UPDATE".($lc||$ie===array()?" $H$re":limit1($H,$re)));if(!$I)break;$ia+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ia),$I);}}elseif(!is_string($Cb=get_file("csv_file",true)))$k=upload_error($Cb);elseif(!preg_match('~~u',$Cb))$k='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($ha["output"])."&format=".urlencode($_POST["separator"]));$I=true;$Ja=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Cb,$z);$ia=count($z[0]);begin();$xd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($z[0]as$u=>$V){preg_match_all("~((?>\"[^\"]*\")+|[^$xd]*)$xd~",$V.$xd,$yc);if(!$u&&!array_diff($yc[1],$Ja)){$Ja=$yc[1];$ia--;}else{$O=array();foreach($yc[1]as$p=>$Ga)$O[idf_escape($Ja[$p])]=($Ga==""&&$m[$Ja[$p]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ga))));$I=insert_update($a,$O,$cd);if(!$I)break;}}if($I)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ia),$I);queries("ROLLBACK");}}}$Kd=$b->tableName($S);if(is_ajax())ob_start();page_header('Select'.": $Kd",$k);$O=null;if(isset($rd["insert"])){$O="";foreach((array)$_GET["where"]as$V){if(count($Mb[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!ereg('[_%]',$V["val"]))))$O.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}$b->selectLinks($S,$O);if(!$f)echo"<p class='error'>".'Unable to select the table'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($X,$f,$s);$b->selectOrderPrint($C,$f,$s);$b->selectLimitPrint($v);$b->selectLengthPrint($Od);$b->selectActionPrint($s);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$n=$g->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));$E=floor(max(0,$n-1)/$v);}$H=$b->selectQueryBuild($M,$X,$Tb,$C,$v,$E);if(!$H)$H="SELECT".limit((+$v&&$Tb&&$lc&&$t=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Qb,($X?"\nWHERE ".implode(" AND ",$X):"").$Ub,($v!=""?+$v:null),($E?$v*$E:0),"\n");echo$b->selectQuery($H);$I=$g->query($H);if(!$I)echo"<p class='error'>".error()."\n";else{if($t=="mssql"&&$E)$I->seek($v*$E);$nb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$t=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last")$n=(+$v&&$Tb&&$lc?($t=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($H) x")):count($L));if(!$L)echo"<p class='message'>".'No rows.'."\n";else{$ua=$b->backwardKeys($a,$Kd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Tb&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edit'."</a>");$Gc=array();$Sb=array();reset($M);$jd=1;foreach($L[0]as$u=>$V){if($u!=$Kc){$V=$_GET["columns"][key($M)];$l=$m[$M?($V?$V["col"]:current($M)):$u];$B=($l?$b->fieldName($l,$jd):"*");if($B!=""){$jd++;$Gc[$u]=$B;$e=idf_escape($u);$cc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($u);$Ya="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($cc.($C[0]==$e||$C[0]==$u||(!$C&&$lc&&$Tb[0]==$e)?$Ya:'')).'">';echo(!$M||$V?apply_sql_function($V["fun"],$B):h(current($M)))."</a>";echo"<span class='column hidden'>","<a href='".h($cc.$Ya)."' title='".'descending'."' class='text'> â†“</a>";if(!$V["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($u)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$Sb[$u]=$V["fun"];next($M);}}$vc=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$u=>$V)$vc[$u]=max($vc[$u],min(40,strlen(utf8_decode($V))));}}echo($ua?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($v%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Mb)as$A=>$K){$fe=unique_array($L[$A],$s);if(!$fe){$fe=array();foreach($L[$A]as$u=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$u))$fe[$u]=$V;}}$ge="";foreach($fe
as$u=>$V){if(strlen($V)>64){$u="MD5(".(strpos($u,'(')?$u:idf_escape($u)).")";$V=md5($V);}$ge.="&".($V!==null?urlencode("where[".bracket_escape($u)."]")."=".urlencode($V):"null%5B%5D=".urlencode($u));}echo"<tr".odd().">".(!$Tb&&$M?"":"<td>".checkbox("check[]",substr($ge,1),in_array(substr($ge,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($lc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$ge)."'>".'edit'."</a>"));foreach($K
as$u=>$V){if(isset($Gc[$u])){$l=$m[$u];if($V!=""&&(!isset($nb[$u])||$nb[$u]!=""))$nb[$u]=(is_mail($V)?$Gc[$u]:"");$w="";$V=$b->editVal($V,$l);if($V!==null){if(ereg('blob|bytea|raw|file',$l["type"])&&$V!="")$w=ME.'download='.urlencode($a).'&field='.urlencode($u).$ge;if($V==="")$V="&nbsp;";elseif($Od!=""&&is_shortable($l))$V=shorten_utf8($V,max(0,+$Od));else$V=h($V);if(!$w){foreach((array)$Mb[$u]as$Lb){if(count($Mb[$u])==1||end($Lb["source"])==$u){$w="";foreach($Lb["source"]as$p=>$_d)$w.=where_link($p,$Lb["target"][$p],$L[$A][$_d]);$w=($Lb["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Lb["db"]),ME):ME).'select='.urlencode($Lb["table"]).$w;if(count($Lb["source"])==1)break;}}}if($u=="COUNT(*)"){$w=ME."select=".urlencode($a);$p=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$fe))$w.=where_link($p++,$U["col"],$U["val"],$U["op"]);}foreach($fe
as$mc=>$U)$w.=where_link($p++,$mc,$U);}}if(!$w&&($w=$b->selectLink($K[$u],$l))===null){if(is_mail($K[$u]))$w="mailto:$K[$u]";if($fd=is_url($K[$u]))$w=($fd=="http"&&$aa?$K[$u]:"$fd://www.adminer.org/redirect/?url=".urlencode($K[$u]));}$q=h("val[$ge][".bracket_escape($u)."]");$W=$_POST["val"][$ge][bracket_escape($u)];$Wb=h($W!==null?$W:$K[$u]);$xc=strpos($V,"<i>...</i>");$jb=is_utf8($V)&&$L[$A][$u]==$K[$u]&&!$Sb[$u];$Nd=ereg('text|lob',$l["type"]);echo(($_GET["modify"]&&$jb)||$W!==null?"<td>".($Nd?"<textarea name='$q' cols='30' rows='".(substr_count($K[$u],"\n")+1)."'>$Wb</textarea>":"<input name='$q' value='$Wb' size='$vc[$u]'>"):"<td id='$q' onclick=\"selectClick(this, event, ".($xc?2:($Nd?1:0)).($jb?"":", '".h('Use edit link to modify this value.')."'").");\">".$b->selectVal($V,$w,$l));}}if($ua)echo"<td>";$b->backwardKeysPrint($ua,$L[$A]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Tb&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($L||$E)&&!is_ajax()){$ub=true;if($_GET["page"]!="last"&&+$v&&!$lc&&($n>=$v||$E)){$n=found_rows($S,$X);if($n<max(1e4,2*($E+1)*$v))$n=reset(slow_query("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):"")));else$ub=false;}if(+$v&&($n===false||$n>$v||$E)){echo"<p class='pages'>";$zc=($n===false?$E+(count($L)>=$v?2:1):floor(($n-1)/$v));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($E+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$E).($E>5?" ...":"");for($p=max(1,$E-4);$p<min($zc,$E+5);$p++)echo
pagination($p,$E);if($zc>0){echo($E+5<$zc?" ...":""),($ub&&$n!==false?pagination($zc,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$zc'>".'last'."</a>");}echo(($n===false?count($L)+1:$n-$E*$v)>$v?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$v).', \''.'Loading'.'\');">'.'Load more data'.'</a>':'');}echo"<p>\n",($n!==false?"(".($ub?"":"~ ").lang(array('%d row','%d rows'),$n).") ":""),checkbox("all",1,0,'whole result')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Edit</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure? (' + (this.form['all'].checked ? <?php echo$n,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Nb=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Nb['sql']);break;}}if($Nb){print_fieldset("export",'Export');$Uc=$b->dumpOutput();echo($Uc?html_select("output",$Uc,$ha["output"])." ":""),html_select("format",$Nb,$ha["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ha["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($nb,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$Wd'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$g->query("KILL ".(+$_POST["kill"]));elseif(list($R,$q,$B)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$v=11;$I=$g->query("SELECT $q, $B FROM ".table($R)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$q = $_GET[value] OR ":"")."$B LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $v");for($p=1;($K=$I->fetch_row())&&$p<$v;$p++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($q))."]")."=".urlencode($K[0]))."'>".h($K[1])."</a><br>\n";if($K)echo"...\n";}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Search'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Table'.'<td>'.'Rows'."</thead>\n";foreach(table_status()as$R=>$K){$B=$b->tableName($K);if(isset($K["Engine"])&&$B!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$B</a>";$V=number_format($K["Rows"],0,'.',',');echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($K["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();