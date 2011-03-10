/**
 * RokmooMenu - Advanced mootools menu widget for Joomla!
 * 
 * @version		2.4
 * 
 * @author		Djamil Legato <djamil@rockettheme.com>
 * @copyright	Andy Miller @ Rockettheme, LLC
 *
 *
 *
 * History
 * v2.4 - Fixed IE8 issues on subs animations
 * v2.3 - Fixed an IE6 issue on third levels submenus
 * v2.2 - Fixes and opacity option for submenus
 * v2.0 - Added ability to have crossfading classes underneath menu links
 *      - MouseOver and MouseLeave for the crossfading bg have standalone duration and transitions
 *        giving the ability to an enormous amount of different combinations.
 * v1.2 - Adapted for IE6 by Djamil Legato
 * v1.1 - Flash Issues - Adapted for IE6 by Djamil Legato
 * ----
 * First version of MooMenu was written by Olmo Maldonado
 */

eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6(S.V.2E&&1m.2D){1m.2C(\'2B\',8(){7 b=$$(\'.H-I-o\');7 c=$$(\'.H-I-m\');b.q(8(a,i){a.1b(c[i])})})};7 2o=t 1H({2l:[2k],2j:\'2.4 (2h 1.2)\',5:{R:J,1j:2b,L:\'29\',T:1n,Q:{1i:[\'p\',\'n\'],Y:1H.21},l:{16:J,1g:J,1d:J,u:{9:1U,j:k.18.1Q.1P},N:{9:1n,j:k.18.1N.1M}},v:{16:J,p:0.2f,u:{9:1U,j:k.18.1Q.1P},N:{9:1n,j:k.18.1N.1M},1I:{\'m\':0,\'o\':0,\'r\':0,\'w\':0}}},1X:8(b,c){3.1Y(c);6(S.V.17)3.5.T=1Z;3.15=1B.20(b);6(3.5.l.16)3.1z();6(3.5.v.16)3.1y();3.15.1x(\'1w\').q(8(a){a.1l({\'22\':3.1t.1s(3,a),\'23\':3.1q.1s(3,a)})},3)},1t:8(b){$24(b.1r);6(!b.D(3.5.L)){6(S.V.17){7 c=b.1u(\'z\').1C(" ");7 d=3.5.L;c=c.1E(8(y){E!y.1f("-"+d)});c.q(8(a){6(b.D(a))b.19(a+"-"+d)},3);7 e=c.1J("-")+"-"+d;6(!b.D(e))b.19(e)}b.19(3.5.L);7 f=b.1a(\'1L\');6(f){6(3.5.1j)f.1j({p:J});f.Q(3.5.Q,3)}b.1R().q(8(a){a.X(3.5.L)},3)}},1q:8(e){7 f=3.5.L;e.1r=(8(){6(S.V.17){7 b=e.1u(\'z\').1C(" ");b=b.1E(8(y){E y.1f("-"+f)});b.q(8(a){6(e.D(a))e.X(a)},3);7 c=b.1J("-")+"-"+f;6(!e.D(c))e.X(c)}e.X(f);7 d=e.1a(\'25\');6(d)d.26()}).T(3.5.T,3)},1z:8(){3.15.1k().q(8(a,i){a.19(\'r-27-\'+(i+1));6(!a.D(\'28\')){a.2a().11(\'Z\',\'1V\');7 b=a.1S();7 c={\'m\':a.x(\'12-m\').C(),\'o\':a.x(\'12-o\').C(),\'r\':a.x(\'12-r\').C(),\'w\':a.x(\'12-w\').C()};7 d={\'m\':a.x(\'13-m\').C(),\'o\':a.x(\'13-o\').C(),\'r\':a.x(\'13-r\').C(),\'w\':a.x(\'13-w\').C()};7 e=t G(\'O\',{\'z\':\'2c-l 2d\',\'2e\':{\'Z\':\'1F\',\'m\':0,\'r\':0,\'p\':0,\'s\':b.s+(3.5.l.1g?-c.m-c.o:0)+(3.5.l.1d?-d.m-d.o:0),\'n\':b.n+(3.5.l.1g?-c.r-c.w:0)+(3.5.l.1d?-d.r-d.w:0)}}).1b(a);7 f=3;7 g=t k.1v(e,{9:3.5.l.u.9,j:3.5.l.u.j,1W:\'2g\'}).B(\'p\',0);a.1l({\'1G\':8(){g.B(\'1c\',{9:f.5.l.u.9,j:f.5.l.u.j});g.F(\'p\',1)},\'1A\':8(){g.B(\'1c\',{9:f.5.l.N.9,j:f.5.l.N.j});g.F(\'p\',0)}})}},3)},1y:8(){7 h=3.15.1k().1x(\'1w\');7 i=[],K=3;h.q(8(g){6(g.2i){g.q(8(b){i.M(b);7 a=b.1a(\'a\')||b.1a(\'2m\');6(!a)E;a.11(\'Z\',\'1V\');7 c=a.1S();7 d=3.5.v.1I;6(1m.2n){7 e=t G(\'O\',{\'z\':\'H-I-2p\'}).1b(b).1o(t G(\'O\',{\'z\':\'H-I-m\'})).1o(t G(\'O\',{\'z\':\'H-I-o\'}))}P{7 e=t G(\'O\',{\'z\':\'H-I-m\'}).1b(b).1o(t G(\'O\',{\'z\':\'H-I-o\'}))};e.1e({\'Z\':\'1F\',\'r\':d.r||0,\'m\':d.m||0,\'2q\':\'1O\',\'p\':0});6(S.V.17&&c.s&&c.n)e.1e({\'s\':c.s-d.o||0,\'n\':c.n-d.w||0});P{e.1e({\'s\':c.s-d.o||0,\'n\':c.n-d.w||0})};7 f=t k.1v(e,{9:3.5.v.u.9,j:3.5.v.u.j,2r:J}).B(\'p\',0);b.1l({\'1G\':8(){f.B(\'1c\',{9:K.5.v.u.9,j:K.5.v.u.j});f.F(\'p\',K.5.v.p)},\'1A\':8(){f.B(\'1c\',{9:K.5.v.N.9,j:K.5.v.N.j});f.F(\'p\',0)}})},3)}},3)}});G.2s({Q:8(b,c){6(c.5.R){7 d=3.A().A().A();7 e=[];6(!d.D(\'2t\')){b.1i.q(8(a){6(a==\'n\')E;P e.M(a)});6(e.1h(\'s\')==-1)e.M(\'s\')}P{b.1i.q(8(a){6(a==\'s\')E;P e.M(a)});6(e.1h(\'n\')==-1)e.M(\'n\')}}6(!3.k){3.k=t k.1T(3,b.Y);6(c.5.R&&3.A().D(\'2u-2v\'))3.U=t k.1T(3.A(),b.Y);3.W=3.2w.2x(3,e);3.14={};2y(7 i 2z 3.W)3.14[i]=0}6(e.1K(\'n\')||e.1K(\'s\')){3.11(\'1p\',\'1O\');3.1D(\'1L\').q(8(a){a.11(\'1p\',\'2A\')},3)}6(c.5.R){6(3.U){3.U.B(3.14)}}3.k.B(3.14);6(c.5.R){3.k.F.T((c.5.Q.Y.9/10),3.k,3.W);6(3.U)3.U.F(3.W)}P{3.k.F(3.W)}},1D:8(a){7 b=[];7 c=3.A();2F(c&&c!==1B){6(c.2G().1f(a))b.M(c);c=c.A()}E b},1R:8(){7 a=3.A().1k();a.2H(a.1h(3),1);E a}});',62,168,'|||this||options|if|var|function|duration||||||||||transition|Fx|bg|left|height|right|opacity|each|top|width|new|overEffect|submenus|bottom|getStyle||class|getParent|set|toInt|hasClass|return|start|Element|submenu|animation|false|self|hoverClass|push|outEffect|div|else|animate|verhor|Browser|delay|Fx1|Engine|now|removeClass|opts|position||setStyle|margin|padding|FxEmpty|element|enabled|trident4|Transitions|addClass|getElement|inject|tween|paddings|setStyles|test|margins|indexOf|props|bgiframe|getChildren|addEvents|window|500|adopt|overflow|out|sfTimer|bind|over|getProperty|Tween|li|getElements|subsAnimation|bgAnimation|mouseleave|document|split|getParentsExpr|filter|absolute|mouseenter|Class|offsets|join|contains|ul|easeIn|Sine|hidden|easeOut|Quad|getSiblingsExpr|getCoordinates|Morph|700|relative|link|initialize|setOptions|50|id|empty|mouseover|mouseout|clear|iframe|remove|menu|active|sfHover|getFirst|true|animated|png|styles|35|cancel|mt|length|version|Options|Implements|span|ie|Rokmoomenu|container|visibility|wait|implement|menutop|drop|wrap|getStyles|apply|for|in|visible|load|addEvent|JSON|trident|while|getTag|splice'.split('|'),0,{}))