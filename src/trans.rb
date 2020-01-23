input='
<tr>
  <td class="text"><image class="img" src="image/174mutsukoku.jpg"/></td>
  <td class="text"><image class="img" src="image/140shimousa.jpg"/></td>
  <td class="text"><image class="img" src="image/004shinano.jpg"/></td>
  <td class="text"><image class="img" src="image/312hidakokubun.jpg"/></td>
</tr>
<tr>
  <td class="text">陸奥国分寺</td>
  <td class="text">下総国分寺</td>
  <td class="text">信濃国分寺</td>
  <td class="text">飛騨国分寺</td>
</tr>
  '


arr=input.scan(/<tr>.+?<\/tr>/m)

(arr.size/2).times{|i|

  arr1=arr[2*i].split("\n")[1..-2]
  arr2=arr[2*i+1].split("\n")[1..-2]

  arr1.size.times{|i|
    print('["')
    print arr1[i].strip.gsub('<td class="text"><image class="img" src="image/','').gsub('.jpg"/></td>','')
    print('","')
    print arr2[i].strip.gsub('<td class="text">','').gsub('</td>','')
    print('"],')
    print("\n")
  }
}

print "\n\n\n"
