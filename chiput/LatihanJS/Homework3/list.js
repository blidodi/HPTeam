      function get_enter() {
          var enter = new Array;
          var enter_str = localStorage.getItem('todo');
          if (enter_str !== null) {
              enter = JSON.parse(enter_str); 
          }
          return enter;
      }
      
      function add() {
          var task = document.getElementById('task').value;
       
          var enter = get_enter();
          enter.push(task);
          localStorage.setItem('todo', JSON.stringify(enter));
       
          show();
       
          return false;
      }
       
      function remove() {
          var id = this.getAttribute('id');
          var enter = get_enter();
          enter.splice(id, 1);
          localStorage.setItem('todo', JSON.stringify(enter));
       
          show();
       
          return false;
      }
       
      function show() {
          var enter = get_enter();
       
          var html = '';
          for(var i=0; i<enter.length; i++) {
              html += '<input type="checkbox"><input type="task" value="' + enter[i] + ' " style="border:0 none" readonly><button class="remove" id="' + i  + '">x</button><br/><br/>';
          };
          html += '';
       
          document.getElementById('enter').innerHTML = html;
       
          var buttons = document.getElementsByClassName('remove');
          for (var i=0; i < buttons.length; i++) {
              buttons[i].addEventListener('click', remove);
          };
      }
       
      document.getElementById('add').addEventListener('click', add);
      show();function get_enter() {
          var enter = new Array;
          var enter_str = localStorage.getItem('todo');
          if (enter_str !== null) {
              enter = JSON.parse(enter_str); 
          }
          return enter;
      }
       
      function add() {
          var task = document.getElementById('task').value;
       
          var enter = get_enter();
          enter.push(task);
          localStorage.setItem('todo', JSON.stringify(enter));
       
          show();
       
          return false;
      }

      function show() {
          var enter = get_enter();
       
          var html = '';
          for(var i=0; i<enter.length; i++) {
              html += '<input type="checkbox" class="checkbox"> <input type="task" class ="field1" value="' + enter[i] + ' " style="border:0 none" readonly><button class="button remove" id="' + i  + '">X</button><br/><br/>';
          };
          html += '';
       
          document.getElementById('enter').innerHTML = html;
       
          var buttons = document.getElementsByClassName('remove');
          for (var i=0; i < buttons.length; i++) {
              buttons[i].addEventListener('click', remove);
          };
      }
       
      function remove() {
          var id = this.getAttribute('id');
          var enter = get_enter();
          enter.splice(id, 1);
          localStorage.setItem('todo', JSON.stringify(enter));
       
          show();
       
          return false;
      }
       
      document.getElementById('add').addEventListener('click', add);
      show();