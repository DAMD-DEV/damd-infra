function loadArg(){

  var pro,kind;

  arg=window.location.search;

  ar_str=arg.split("&");

  pro=ar_str[0].split("=");

  kind=ar_str[1].split("=");

  pro[1]=unescape(pro[1]);

  if(kind.length>=1){

  	kind[1]=unescape(kind[1]);

  }else{

  	kind[1]="";

  }

  //alert(pro[1]+"Åb"+kind[1]);

  

  var someNodeList = $('items').getElementsByTagName('option');

  var nodes = $A(someNodeList);

  nodes.each(function(node){

  	  if(kind[1]==""){

  	  	selProduct=pro[1];

  	  }else{

  	  	selProduct=pro[1]+"Åb"+kind[1];

  	  }

  	  if(node.innerHTML==selProduct){

    	node.selected="true";

      }

  });



}

function click2buy(u,p,k){

	var es_p,es_k;

	es_p=escape(p);

	if(k==""){

      es_k="";

	}else{

      es_k=escape(k);

	}

	window.open(u+"?p="+es_p+"&k="+es_k,"_self");

}