#coding: utf-8
import cv2
import glob
import os
for file in glob.glob("./*.jpg"):
    img = cv2.imread(file)
    resised_file=cv2.resize(img, (303, 404))
    #resised_file=cv2.resize(img, (303, 404)) #縦画像
    filename=os.path.split(file)[-1]
    print(cv2.imwrite(filename.split(".")[0]+"_10x.jpg", resised_file))  #=>T/F
