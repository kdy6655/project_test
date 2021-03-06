<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <link rel="shortcut icon" href="img/CN타_favicon.ico">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>메인화면</title>
    </head>
    <body>
        <br>
        <div class="image" style="float:left;">
            &nbsp;<img src="img/CN타.png">
        </div>

         <button class="btn btn-secondary" onclick="location.href='./information.php'" style=" margin-left: 10px; float:right; font-size:15.5px;">회원정보</button>
            
        <button class="btn btn-info" onclick="location.href='./logout_action.php'" style="margin-left: 10px;  float:right; font-size:15.5px;">로그아웃</button>

        <button class="btn btn-primary" onclick="location.href='./login.php'" style="float:right; font-size:15.5px;">로그인</button>
            <br />
            <br>
            <hr>
            <br>
        <p><b><img width="5%" src="img/CN타.png">&nbsp;게시판</b></p>
        <table class="table table-hover">
            <thead style="text-align: center;">
                <tr>
                    <th width="50" align="center">번호</th>
                    <th width="500" align="center">제목</th>
                    <th width="100" align="center">작성자</th>
                    <th width="200" align="center">날짜</th>
                    <th width="50" align="center">조회수</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                <tr>
                    <td>1</td>
                    <td>임병우의 실체</td>
                    <td>박준우</td>
                    <td>5/12</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>임병우의 실체</td>
                    <td>박준우</td>
                    <td>5/12</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>임병우의 실체</td>
                    <td>박준우</td>
                    <td>5/12</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>임병우의 실체</td>
                    <td>박준우</td>
                    <td>5/12</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>임병우의 실체</td>
                    <td>박준우</td>
                    <td>5/12</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>임병우의 실체</td>
                    <td>박준우</td>
                    <td>5/12</td>
                    <td>100</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <nav aria-label="Page navigation example" style="position:absolute; left:44%; bottom:10%;">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
            </li>
            </ul>
        </nav>
        <div class="btn btn-light" style="border:1px gray solid; float:right; margin-right: 50px;">
            <font style="cursor: hand" onclick="location.href='./write.php'">글쓰기</font>
        </div>
    </body>
</html>