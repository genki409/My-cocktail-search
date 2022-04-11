// 選択画像を表示

function previewFile(file) {
	// プレビュー画像を追加する要素
	const preview = document.getElementById('preview');
  
	// FileReaderオブジェクトを作成
	const reader = new FileReader();
  
	// ファイルが読み込まれたときに実行する
	reader.onload = function (e) {
	  const imageUrl = e.target.result; // 画像のURLはevent.target.resultで呼び出せる
	  const img = document.createElement("img"); // img要素を作成
	  img.src = imageUrl; // 画像のURLをimg要素にセット
	  preview.appendChild(img); // #previewの中に追加
	}
  
	// いざファイルを読み込む
	reader.readAsDataURL(file);
  }
  
  
  // <input>でファイルが選択されたときの処理
  const fileInput = document.getElementById('example');
  const handleFileSelect = () => {
	const files = fileInput.files;
	for (let i = 0; i < files.length; i++) {
	  previewFile(files[i]);
	}
  }
  fileInput.addEventListener('change', handleFileSelect);




// 日付自動入力


//今日の日時を表示 
        window.onload = function () {
            //今日の日時を表示
            var date = new Date()
            var year = date.getFullYear()
            var month = date.getMonth() + 1
            var day = date.getDate()
          
            var toTwoDigits = function (num, digit) {
              num += ''
              if (num.length < digit) {
                num = '0' + num
              }
              return num
            }
            
            var yyyy = toTwoDigits(year, 4)
            var mm = toTwoDigits(month, 2)
            var dd = toTwoDigits(day, 2)
            var ymd = yyyy + "-" + mm + "-" + dd;
            
            document.getElementById("today").value = ymd;
        }

// フォームのinputを増やすボタン

      // $(document).on("click", ".add", function() {
      //     $(this).parent().clone(true).insertAfter($(this).parent());
      // });
      // $(document).on("click", ".del", function() {
      //     var target = $(this).parent();
      //     if (target.parent().children().length > 1) {
      //         target.remove();
      //     }
      // });


      $(function() {

        $('button#add').click(function(){
      
        var tr_form = '' +
        '<tr>' +
          '<td><input type="text" name="text_1[]"></td>' +
          '<td><input type="text" name="text_2[]"></td>' +
        '</tr>';
      
        $(tr_form).appendTo($('table > tbody'));
      
      });
      
      
      });