#include <stdio.h>
int BinarySearch(int arr[], int l, int r, int x){
  if(r>=l){
    int mid = l + (r-l)/2;
    if(arr[mid]==x){
      return mid;
    }
    if(arr[mid]>x){
      return BinarySearch(arr, l, mid-1, x);
    }
    return BinarySearch(arr, mid+1, r, x);
  }
  return -1;
}
int main(void){
  int n;
  printf("Enter the number of elements: ");
  scanf("%d", &n);
  int arr[n];
  printf("Enter the elements: ");
  for(int i=0; i<n; i++){
    scanf("%d", &arr[i]);
  }
  int x;
  printf("Enter the element to be searched: ");
  scanf("%d", &x);
  int result = BinarySearch(arr, 0, n-1, x);
  if(result==-1)
    printf("Element is not present in the array");
  else
    printf("Element is present at index %d", result);
  return 0;
}