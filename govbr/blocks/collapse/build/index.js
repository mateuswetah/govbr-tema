(()=>{"use strict";const e=window.wp.blocks,c=window.wp.element,t=(window.wp.i18n,window.wp.blockEditor),l=[["govbr/collapse-label"],["govbr/collapse-content"]],o=["govbr/collapse-label","govbr/collapse-content"],{SVG:s,Path:n}=wp.components,r=(0,c.createElement)(s,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24",height:"24px",width:"24px"},(0,c.createElement)(n,{d:"m17.988 3.0898c-0.14175 0-0.28132 0.059738-0.38281 0.16797-0.20131 0.21469-0.20131 0.54312 0 0.75781l1.3613 1.4492c0.10639 0.11346 0.25758 0.16991 0.41016 0.16211 0.1528 0.0081758 0.30652-0.049507 0.41211-0.16211l1.3613-1.4492c0.20131-0.21469 0.20131-0.54312 0-0.75781-0.20143-0.21482-0.56419-0.21482-0.76562 0l-1.0078 1.0723-1.0059-1.0723c-0.099997-0.10663-0.24106-0.16797-0.38281-0.16797zm-14.92 0.26953c-0.27265 0-0.49414 0.15451-0.49414 0.3457v1.3105c0 0.19124 0.22149 0.34375 0.49414 0.34375h12.35c0.27265 0 0.49219-0.15256 0.49219-0.34375v-1.3105c0-0.19124-0.21954-0.3457-0.49219-0.3457h-12.35zm-0.13477 4.666c-0.19861 0-0.35938 0.094266-0.35938 0.21094v1.5781c0 0.11667 0.16077 0.21094 0.35938 0.21094h18.133c0.19861 0 0.35938-0.094276 0.35938-0.21094v-1.5781c0-0.11667-0.16077-0.21094-0.35938-0.21094h-18.133zm-0.041016 3.6563c-0.17613 0-0.31836 0.083947-0.31836 0.1875v1.625c0 0.10355 0.14223 0.1875 0.31836 0.1875h13.775c0.17613 0 0.31641-0.083958 0.31641-0.1875v-1.625c0-0.10355-0.14028-0.1875-0.31641-0.1875h-13.775zm0.089844 3.6562c-0.2254 0-0.4082 0.10771-0.4082 0.24023v1.5215c0 0.13252 0.18281 0.23828 0.4082 0.23828h16.74c0.2254 0 0.40625-0.10576 0.40625-0.23828v-1.5215c0-0.13252-0.18086-0.24023-0.40625-0.24023h-16.74zm-0.089844 3.6582c-0.17613 0-0.31836 0.081995-0.31836 0.18555v1.627c0 0.10355 0.14223 0.1875 0.31836 0.1875h13.775c0.17613 0 0.31641-0.083956 0.31641-0.1875v-1.627c0-0.10355-0.14028-0.18555-0.31641-0.18555h-13.775z","stroke-miterlimit":"3.7","stroke-width":".365"})),i=JSON.parse('{"u2":"govbr/collapse"}');(0,e.registerBlockType)(i.u2,{edit:function(e){const{clientId:s,setAttributes:n}=e,r=(0,t.useBlockProps)({className:"br-list"}),i=(0,t.useInnerBlocksProps)(r,{template:l,allowedBlock:o,templateLock:"all"});return n({blockId:s}),(0,c.createElement)("div",i)},save:function(){const e=t.useBlockProps.save({className:"br-list"}),l=t.useInnerBlocksProps.save(e);return(0,c.createElement)("div",l)},icon:r})})();