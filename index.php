<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("codeblocks/meta.php")?>
    <script src="js/jquery-3.5.0.js"></script>    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <?php require_once("codeblocks/css.php")?>
    <link href="css/style.css" rel="stylesheet">
    <title>MOR</title>
</script>
<body>
    <header class="header">
        <?php require_once("codeblocks/main-nav.php")?>
    </header>

    <main>
        <div class="main-title_container">
            <h1 class="main-title">විවිධ පැමිණිලි ලේඛනය</h1>
        </div>
        <div class="container">
        <form action="index.html" class="filling-form">
            <div class="main-section">
                <h2 class="main-section_title">01. පැමිණිල්ල කළ දිනය හා වේලාව</h2>
                <div class="sub-section">
                        <label for="sub-title" class="sub-title">පැමිණිල්ල දැමීමට ස්ථානයට පැමිණි දිනය හා වේලාව</label>
                        <div class="input-section">
                            <div class="input-sub_section">
                                <label for="date" class="label-input">දිනය</label>
                                <input type="text" class="sub-section_input" id="date-input" required>
                            </div>
                            <div class="input-sub_section">
                                <label for="time"" class="label-input">වේලාව</label>
                                <input type="text" class="sub-section_input" id="time-input" required>
                            </div>
                        </div>
                        <label for="sub-title" class="sub-title">පැමිණිල්ල සටහන් කළ දිනය හා වේලාව</label>
                        <div class="input-section">
                            <div class="input-sub_section">
                                <label for="date" class="label-input">දිනය</label>
                                <input type="text" class="sub-section_input" id="date-input" required>
                            </div>
                            <div class="input-sub_section">
                                <label for="time"" class="label-input">වේලාව</label>
                                <input type="text" class="sub-section_input" id="time-input" required>
                            </div>
                        </div>
                </div>
            </div>
            <div class="main-section">
                <h2 class="main-section_title">02. දිනය/තොරතුරු පොතේ යොමුව හා ග්‍රාම නිලධාරී වසම හා අංකය</h2>
                <div class="input-section">
                    <div class="input-sub_section">
                        <label for="date" class="label-input">දිනය</label>
                        <input type="text" class="sub-section_input" id="date-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">තො/පො යොමුව</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. වසම</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                </div>
            </div>
            <div class="main-section">
                <h2 class="main-section_title">03. වරදේ ස්වභාවය, පොලීසියට පැමිණීම හා පැමිණිල්ල සටහන් කිරීම සඳහා ගතවූ කාලය</h2>
                <div class="input-section">
                    <div class="input-sub_section">
                        <label for="date" class="label-input">දිනය</label>
                        <input type="text" class="sub-section_input" id="date-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">තො/පො යොමුව</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. වසම</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                </div>
            </div>
            <div class="main-section">
                <h2 class="main-section_title">04. පැමිණිලිකරුගේ විස්තරය</h2>
                <div class="input-section">
                    <div class="input-sub_section">
                        <label for="date" class="label-input">දිනය</label>
                        <input type="text" class="sub-section_input" id="date-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">තො/පො යොමුව</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. වසම</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                </div>
            </div><div class="main-section">
                <h2 class="main-section_title">05. වග උත්තරකරුගේ විස්තරය</h2>
                <div class="input-section">
                    <div class="input-sub_section">
                        <label for="date" class="label-input">දිනය</label>
                        <input type="text" class="sub-section_input" id="date-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">තො/පො යොමුව</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. වසම</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                </div>
            </div><div class="main-section">
                <h2 class="main-section_title">06. බී පෝරමය නිකුත්කරන ලද්දේ ද?</h2>
                <div class="input-section">
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                </div>
            </div><div class="main-section">
                <h2 class="main-section_title">07. විභාග කළ නිලධාරියා සහ විභාග සටහන්වල යොමුව</h2>
                <div class="input-section">
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                </div>
            </div><div class="main-section">
                <h2 class="main-section_title">08. ප්‍රගතිය පැමිණිකරුට දැනුම් දුන්නා ද? එසේනම් දැනුම් දුන් දිනය හා වේලාව</h2>
                <div class="input-section">
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                </div>
            </div><div class="main-section">
                <h2 class="main-section_title">09. විමර්ශන කටයුතු ආරම්භ කළ දිනය හා වේලාව, විමර්ශන අවසන් කළ දිනය හා වේලාව ඒ සඳහා ගත වූ කාලය</h2>
                <div class="input-section">
                    <div class="input-sub_section">
                        <label for="date" class="label-input">දිනය</label>
                        <input type="text" class="sub-section_input" id="date-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">තො/පො යොමුව</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. වසම</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                </div>
            </div><div class="main-section">
                <h2 class="main-section_title">10. සමථ මූල මණ්ඩලය විසින් අධිකරණය වෙත යොමු කළේ නම් යොමු කළ දිනය, වාර්තාව ලද දිනය හා නිරවුල් නොකිරීමේ වාර්තාව අධිකරණයට ඉදිරිපත් කළ දිනය හා නඩු අංකය</h2>
                <div class="input-section">
                    <div class="input-sub_section">
                        <label for="date" class="label-input">දිනය</label>
                        <input type="text" class="sub-section_input" id="date-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">තො/පො යොමුව</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. වසම</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                </div>
            </div><div class="main-section">
                <h2 class="main-section_title">11. පැමිණිල්ල ග්‍රහණ අපරාධයක් වූයේ නම් ඒ පිළිබඳව විස්තර බල අපරාධ අංකය</h2>
                <div class="input-section">
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
            </div><div class="main-section">
                <h2 class="main-section_title">12. පැමිණිල්ල පරිගණක කරන නිලධාරියාගේ නම</h2>
                <div class="input-section">
                    <div class="input-sub_section">
                        <label for="time"" class="label-input">ග්‍රා.නි. අංකය</label>
                        <input type="text" class="sub-section_input" id="time-input" required>
                    </div>
                </div>
            </div>
        </form>    
        </div>
    </main>

    <footer>
        <?php require_once("codeblocks/main-footer.php");?>
    </footer>
</body>
</html>