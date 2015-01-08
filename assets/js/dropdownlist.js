/*
 Version: 1.0.0
 Author: Lone
 Date: 2010/4/26
 */
function add1(itemss, obj){
    if (itemss && itemss.length > 0) {
        // var dd = new DropDownList();
        d.add('word2', {
            Items: itemss,
            defaultValue: '0'
        }, 'dn1', false, obj);
        // dd.start();
    }
}

function DropDownList(){
    var Items = [];
    var current = null;
    
    this.add = function(sId, sOpt, sClass, flag, oid){
        sId = this.$el(sId);
        var pos = getPosition(sId);
        var field = document.createElement('input');
        
        field.type = 'hidden';
        
        field.setAttribute('name', sId.id);
        
        field.value = '';
        
        sId.parentNode.insertBefore(field, null);
        
        
        var s = document.createElement('div');
        
        s.style.position = 'absolute';
        //  alert(pos.posX+"--"+pos.posY);
        s.style.left = pos.posX + 'px';
        
        s.style.top = pos.posY + 'px';
        
        s.style.width = sId.offsetWidth + 'px';
        
        s.style.zIndex = '100';
        
        s.style.display = 'none';
        
        if (sClass && sClass != '') {
        
            s.className = sClass;
            
        }
        document.body.insertBefore(s, null);
        s.index = Items.length;
        sId.index = Items.length;
        Items.push(s);
        
        if (typeof(sOpt) == 'object') {
        
            var opts = document.createElement('ul');
            
            for (var item in sOpt.Items) {
            
                var opt = document.createElement('li');
                
                opt.innerHTML = sOpt.Items[item];
                
                opt.value = item;
                
                opt.onmouseover = function(){
                
                    this.className = 'on';
                    
                    this.title = (this.innerText) ? this.innerText : this.textContent;
                }
                
                opt.onmouseout = function(){
                    this.className = '';
                }
                
                opt.onclick = function(){
                    s.style.display = 'none';
                    sId.innerHTML = this.innerHTML;
                    field.value = this.value;
                    //图片显示区域
                   
                    if (!flag) {//alert(this.innerHTML+"----"+objs[this.innerHTML]);
					 
					 var objtemp = "objs" + oid;
                        $("#homemarqkpic").html(eval(objtemp)[this.innerHTML]);
                    }
                    
                    //下拉框显示内容
                    if (flag) {
                        add1(eval("arr" + this.value), this.value);
                    }
                }
                opts.appendChild(opt);
            }
            s.appendChild(opts);
            
            if (sOpt.defaultValue && sOpt.defaultValue != '') {
            
                sId.innerHTML = sOpt.Items[sOpt.defaultValue] ? sOpt.Items[sOpt.defaultValue] : sOpt.defaultValue;
                
                field.value = sOpt.defaultValue;
                
            }
            
        }
        sId.onclick = function(){
            if (current != null && current != this.index) 
                Items[current].style.display = 'none';
            var s = Items[this.index];
            s.style.display = (s.style.display == 'none') ? '' : 'none';
            //alert(s.style.display);
            current = s.index;
        }
    }
    
    this.$el = function(el){
        if (!el) 
            return null;
        if (typeof el == 'string') 
            return document.getElementById(el);
        if (typeof el == 'object') 
            return el;
        return null;
    }
    
    this.start = function(){
    
        var close = function(){
        
            if (current != null && Items[current].style.display != 'none') {
            
                Items[current].style.display = 'none';
            }
        }
        if (document.attachEvent) {
        
            document.attachEvent('onmouseup', close);
        }
        else {
        
            document.addEventListener('mouseup', close, true);
        }
    }
    var getPosition = function(ddlOptions){
        var obj = ddlOptions;
        var x = obj.offsetLeft, y = obj.offsetHeight + obj.offsetTop;
        while (obj.offsetParent) {
            x += obj.offsetParent.offsetLeft;
            y += obj.offsetParent.offsetTop;
            obj = obj.offsetParent;
        }
        obj = ddlOptions;
        while (obj.tagName != 'BODY') {
            if (obj["scrollLeft"]) 
                x -= obj.scrollLeft;
            if (obj["scrollTop"]) 
                x -= obj.scrollTop;
            obj = obj.parentNode;
        }
        x += getScrollLeft();
        // y += getScrollTop();
        return {
            posX: x,
            posY: y
        }
    }
}

function getScrollLeft(){

    return filterResults(window.pageXOffset ? window.pageXOffset : 0, document.documentElement ? document.documentElement.scrollLeft : 0, document.body ? document.body.scrollLeft : 0);
}

function getScrollTop(){

    return filterResults(window.pageYOffset ? window.pageYOffset : 0, document.documentElement ? document.documentElement.scrollTop : 0, document.body ? document.body.scrollTop : 0);
}

function filterResults(n_win, n_docel, n_body){

    var n_result = n_win ? n_win : 0;
    
    if (n_docel && (!n_result || (n_result > n_docel))) 
    
        n_result = n_docel;
    
    return n_body && (!n_result || (n_result > n_body)) ? n_body : n_result;
}
