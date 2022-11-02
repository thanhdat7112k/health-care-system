package com.example.chatbotspring.data.dto;

import lombok.Getter;
import lombok.Setter;

import java.util.List;


@Getter
@Setter
public class MessageResponse {
    private String diseaseName;
    private List<String> recommendationList;
}
