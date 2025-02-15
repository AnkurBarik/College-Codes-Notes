// write a c program to search an element from a sorted array
#include<stdio.h>

int binarySearch(int arr[], int l, int r, int x) {
    while (l <= r) {
        int mid = l + (r - l) / 2;
        if (arr[mid] == x)
            return mid;
        if (arr[mid] < x)
            l = mid + 1;
        else
            r = mid - 1;
    }
    return -1;
}

int main() {
    int arr[100];
    int n, x;
    
    printf("Enter number of elements: ");
    scanf("%d", &n);
    
    printf("Enter %d sorted elements: ", n);
    for(int i = 0; i < n; i++) {
        scanf("%d", &arr[i]);
    }
    
    printf("Enter element to search: ");
    scanf("%d", &x);
    
    int result = binarySearch(arr, 0, n-1, x);
    
    if (result == -1)
        printf("Element not found in array\n");
    else
        printf("Element found at index %d\n", result);
        
    return 0;
}
