document.querySelector('body').onclick = function(e) {
     modal(e);
   };

var ajax = true;
modal = function (e) {
     var i = e.target.getAttribute('name');
     var params = 'modal=modal';
     if (!ajax) return;
     switch(i) {
          case 'btn_red':
               var j = e.target.getAttribute('id');
               var name = document.getElementById('name'+j).textContent;
               var street = document.getElementById('street'+j).textContent;
               var home = document.getElementById('home'+j).textContent;
               var flat = document.getElementById('flat'+j).textContent;
               var price = document.getElementById('price'+j).textContent;
               var actual = document.getElementById('actual'+j).textContent;
               params = 'name=' + name + '&street=' + street + '&home=' + home + '&flat=' + flat + '&price=' + price + '&actual=' + actual + '&id=' + j;   
               i = "https://"+window.location.host+"/php/redrelt.php";
                    break;
          case 'btn_add':
               var callback = 'true';
               var name = document.getElementById('name').value;
               var street = document.getElementById('street').value;
               var home = document.getElementById('home').value;
               var flat = document.getElementById('flat').value;
               var price = document.getElementById('price').value;
               var actual = document.getElementById('actual').value;
               params = 'name=' + name + '&street=' + street + '&home=' + home + '&flat=' + flat + '&price=' + price + '&actual=' + actual;   
               i = "https://"+window.location.host+"/php/addrelt.php";
                    break;
          case 'btn_redact':
               var callback2 = 'true';
               var id = document.getElementById('postid').textContent;
               var name = document.getElementById('redname').value;
               var street = document.getElementById('redstreet').value;
               var home = document.getElementById('redhome').value;
               var flat = document.getElementById('redflat').value;
               var price = document.getElementById('redprice').value;
               var actual = document.getElementById('redactual').value;
               params = 'name=' + name + '&street=' + street + '&home=' + home + '&flat=' + flat + '&price=' + price + '&actual=' + actual + '&id=' + id;   
               i = "https://"+window.location.host+"/php/redactrelt.php";
                    break;
          case 'btn_reg':
               var login = document.getElementById('login').value;
               var pass = document.getElementById('pass').value;
               params = 'login=' + login + '&pass=' + pass;   
               i = "https://"+window.location.host+"/php/sendreg.php";                             
                    break;
          case 'btn_modal_close' || 'modal_window':
               return modal_window_close('modal_window');                      
                    break;
          case 'sortup':
               return sortup();                      
                    break;
          case 'disconnect':
               i = "https://"+window.location.host+"/php/disconnect.php";
                    break;
          case 'sortdown':
               return sortdown();                      
                    break;
          default:
               return false;
               break;
     }
     var xmlHttp = new XMLHttpRequest();
     xmlHttp.onreadystatechange = function() {
          if(xmlHttp.readyState == 4 && xmlHttp.status == 200)    {
               ajax = true;
               var j = xmlHttp.responseText;
               if (callback == 'true') {
                    function isValidJson(json) {
                         try {
                              JSON.parse(json);
                              return true;
                         } catch (e) {
                              return false;
                         }
                     }
                    callback = 'false';
                    if (isValidJson(j)) {
                         var res = JSON.parse(j);
                         loadfile(res.id, 'file');
                    } else return modal_window_open(j, reltor);
               }
               if (callback2 == 'true') {
                    function isValidJson(json) {
                         try {
                              JSON.parse(json);
                              return true;
                         } catch (e) {
                              return false;
                         }
                     }
                    callback2 = 'false';
                    if (isValidJson(j)) {
                         var res = JSON.parse(j);
                         loadfile(res.id, 'redfile');
                    } else return modal_window_open(j, redreltor);
               }
               switch(j) {
                    case 'Авторизация успешна':
                         return window.location.href = "https://"+window.location.host+"/reltor.php";                   
                              break;
                    case 'Дисконнект':
                         return window.location.href = "https://"+window.location.host;                   
                              break;
                    default:
                         return modal_window_open(xmlHttp.responseText, reltor);
                         break;
               }
               
          }
     }
     ajax = false;
     xmlHttp.open("POST", i);
     xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xmlHttp.send(params);
}

modal_window_open = function (i, j) {
     let div = document.createElement('div');
     let div2 = document.createElement('div');
     let btn = document.createElement('button');
          div.append(div2);
     div.className = "modal_window center";
     div.setAttribute('name', "modal_window");
     div.setAttribute('id', "modal_window");
     btn.setAttribute('name', "btn_modal_close");
     div2.className = "window_in_modal center padding025";
     btn.className = "margin025";
     btn.innerHTML = 'Подтвердить';
     div2.innerHTML = i;
     div2.append(btn);
     console.log(j);
     j.append(div);
     document.activeElement.blur();
}

modal_window_close = function(i) {
     document.getElementById(i).remove();
}

loadfile = function(i, j) {
     var input = document.getElementById(j)

     var data = new FormData()
     data.append('file', input.files[0])
     data.append('name', i)

     var response = fetch("https://"+window.location.host+"/php/addimg.php", {
          method: 'POST',
          body: data
     })

     if (response.ok) console.log(response.text());
}

sortup = function() {
          var nodeList = document.getElementsByName('vars');

          var itemsArray = [];
          var parent = nodeList[0].parentNode;

          for (var i = 0; i < nodeList.length; i++) {   
            itemsArray.push(nodeList[i]);
          }

          itemsArray.sort(function(nodeA, nodeB) {
               var textA = nodeA.querySelector('p:nth-child(4)').textContent;
               var textB = nodeB.querySelector('p:nth-child(4)').textContent;
               var numberA = Number(textA) || 0;
               var numberB = Number(textB) || 0;
               console.log(numberA + ' ' +numberB);

               if (numberA < numberB) return -1;
               if (numberA == numberB) return 0;
               if (numberA > numberB) return 1;
            })
            .forEach(function(node) {
              parent.appendChild(node)
            });
}

sortdown = function() {
     var nodeList = document.getElementsByName('vars');

     var itemsArray = [];
     var parent = nodeList[0].parentNode;

     for (var i = 0; i < nodeList.length; i++) {   
       itemsArray.push(nodeList[i]);
     }

     itemsArray.sort(function(nodeA, nodeB) {
          var textA = nodeA.querySelector('p:nth-child(4)').textContent;
          var textB = nodeB.querySelector('p:nth-child(4)').textContent;
          var numberA = Number(textA) || 0;
          var numberB = Number(textB) || 0;
          console.log(numberA + ' ' +numberB);

          if (numberA < numberB) return 1;
          if (numberA == numberB) return 0;
          if (numberA > numberB) return -1;
       })
       .forEach(function(node) {
         parent.appendChild(node)
       });
}


sorthome = function() {
     var nodeList = document.getElementsByName('vars');

     var parent = nodeList[0].parentNode;
     var len = nodeList.length;

     for (var i = 0; i < len; i++) {
          if (selected.value == nodeList[i].querySelector('span:nth-child(2)').textContent || selected.value == 'Все') nodeList[i].style.display = "";
          else nodeList[i].style.display = "none";
     }
     itemsArray.forEach(function(node) {
          parent.appendChild(node)
     });
}

selected.onchange = function(e) {
     sorthome(e);
   };

