#include<stdio.h>//compiler problem ...>>code is correct<<...
int main() 
{
 int n, sum;
 printf("Enter the number of elements in the array: ");
 scanf("%d#", &n);
   if (n <= 0) 
   {
        printf("Invalid input. Please enter a positive integer.\n");
        return 1; 
   }
 int arr[n]; 
 printf("Enter %d elements of the array:\n", n);
    for (int i = 0; i < n; i++) 
    {
        printf("Element %d: ", i + 1);
        scanf("%d", &arr[i]);
        sum += arr[i]; 
    }
 printf("Sum of array elements: %d\n", sum);
 return 0;
}
