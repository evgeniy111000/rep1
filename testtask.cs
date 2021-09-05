using System;
using System.Collections.Generic;
class TestTask {
  static void Main() {
    string input=Console.ReadLine();
    int[] numbers=new int[10];
    foreach(var ch in input)
        if (Char.IsDigit(ch))
            numbers[ch-'0']++;
    for(int i=0;i<numbers.Length;i++)
        if (numbers[i]!=0)
            Console.WriteLine(i+":"+numbers[i]);
    Cycler c=new Cycler(new List<int>(){1,2,3});
    Console.WriteLine(c.GetNext());
    Console.WriteLine(c.GetNext());
    Console.WriteLine(c.GetNext());
    Console.WriteLine(c.GetNext());
  }
}
class Cycler{
      public List<int> list;
      private int index;
      public Cycler(List<int> list){
          this.list=list;
      }
      public int GetNext(){
          if (index>=list.Count)
                index=0;
          index++;
          return list[index-1];
      }
}
