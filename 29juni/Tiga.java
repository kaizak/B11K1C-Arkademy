public class Tiga
{
    public static void main(String[] args) {
        
        for (int i=5; i>=1; i--) {
            // Print star in decreasing order
            for (int j=1; j <=(i * 2) -1; j++)
            {
                if( j == 1 || j == (i * 2) -1 || i == 5)
                    System.out.print("*");
                else
                    System.out.print(" ");
            }
            System.out.println();
            // Print space in increasing order
            for (int k = 5; k >= i; k--)
            {
                System.out.print(" ");
            }
            
        }
    }
}
