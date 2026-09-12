[1mdiff --git a/sds.php b/sds.php[m
[1mindex a537be9..fec4034 100644[m
[1m--- a/sds.php[m
[1m+++ b/sds.php[m
[36m@@ -31,27 +31,7 @@[m [mif ($_SERVER["REQUEST_METHOD"] == "POST") {[m
         default:[m
             $correctAnswer = "Invalid operation";[m
     }[m
[31m-    if (is_numeric($correctAnswer)) {[m
[31m-        $funnyAnswers = [[m
[31m-            $correctAnswer + 1,[m
[31m-            $correctAnswer - 1,[m
[31m-            $correctAnswer + 10,[m
[31m-            $correctAnswer * 2,[m
[31m-            420,[m
[31m-            69,[m
[31m-            "ayaw ko hilabti",[m
[31m-            "20. ayaw pag buot"[m
[31m-        ];[m
[31m-[m
[31m-      [m
[31m-        do {[m
[31m-            $funnyAnswer = $funnyAnswers[array_rand($funnyAnswers)];[m
[31m-        } while ($funnyAnswer == $correctAnswer);[m
[31m-[m
[31m-        $result = " Answer: " . $funnyAnswer;[m
[31m-    } else {[m
[31m-        $result = $correctAnswer;[m
[31m-    }[m
[32m+[m[32m   $result = $correctAnswer;[m
 }[m
 ?>[m
 [m
